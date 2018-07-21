<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StudentInformation;
use App\Http\Requests\StudentInterestsValidator;
use App\Http\Requests\StudentSchoolValidator;
use App\Http\Requests\StudentAbilitiesValidator;
use App\Http\Requests\StudentHouseholdValidator;
use App\Http\Requests\StudentSiblingsValidator;
use App\Http\Requests\ParentQuestionairValidator;
use App\Http\Requests\StudentQuestionairValidator;
use App\Http\Requests\StudentRecommendationValidator;
use App\Student\Application;
use App\Student\Student;
use App\Student\InformationPage;
use App\Student\InterestsPage;
use App\Student\SchoolsPage;
use App\Student\StrengthsNeedsPage;
use App\Student\HouseholdInformationPage;
use App\Student\SiblingsPage;
use App\Student\ParentQuestionairPage;
use App\Student\StudentQuestionairPage;
use App\Student\RecommendationPage;

class StudentApplicationController extends BaseController
{
   	public function __construct()
    {
      parent::__construct();
    }

    public function newStudent(Request $request)
    {
        $application = new Application;
        $application->user_id = Auth::user()->id;
        // $application->first_name = $request['firstName'];
        // $application->last_name = $request['lastName'];
        // $application->year = $request['year'];
        // $application->grade = $request['grade'];
        $application->save();

        // $request->session()->put('applicant', ['id' => $application->id, 'firstName' => $application->first_name]);
        // dd($application->id);

        return redirect()->route('new.student.application', ['id' => $application->id]);
    }

    public function editStudent(Request $request, $id)
    {
        $application = Auth::user()->applications->find($id);
        $request->session()->put('applicant', ['id' => $application->id, 'firstName' => $application->first_name]);

        $buttons = [
            'back' => 'new.student.application',
            'save' => 'new.student.application',
            'next' => 'information.student.application',        
        ];

        return view('partials.forms.applications.student.new', ['application' => $application, 'buttons' => $buttons]);
    }

    public function updateStudent(Request $request, $id)
    {
        $application = Auth::user()->applications->find($id);
        $student = Student::firstOrNew(['applications_id'=> $application->id]);
        $student->first_name = $request['firstName'];
        $student->last_name = $request['lastName'];
        $student->year = $request['year'];
        $student->grade = $request['grade'];
        $student->save();

        $request->session()->put('applicant', ['id' => $application->student->id, 'firstName' => $application->student->first_name]);

        return redirect()->route('information.student.application', ['id' => $application->id]);
    }

    public function updateInformation(StudentInformation $request, $id)
    {
        
        $inputs = $request->validated();
        
        $Page = InformationPage::updateOrCreate(
            ['application_id' => $id],
            [
                'preferred_name' => $inputs["preferredName"], 
                'steam_username' => $inputs["steamUsername"], 
                'email' => $inputs["studentEmailAddress"], 
                'home_phone' => $inputs["studentHomePhone"], 
                'cell_phone' => $inputs["studentCellPhone"], 
                'address' => $inputs["studentAddress"], 
                'city' => $inputs["studentCity"],
                'state' => $inputs["studentState"], 
                'zip' => $inputs["studentZip"], 
                'country' => $inputs["studentCountry"], 
                'gender' => $inputs["studentGender"], 
                'ethnicity' => $inputs["studentEthnicity"], 
                'race' => $inputs["studentRace"], 
                'language' => $inputs["studentLanguage"], 
                'other_languages' => $inputs["studentOtherLanguages"], 
                'birth_city' => $inputs["studentBirthCity"], 
                'referred_by' => $inputs["whoReferredUs"], 
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateInterests(StudentInterestsValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = InterestsPage::updateOrCreate(
            ['application_id' => $id],
            [
                'sports' => $inputs["sports"],
                'activities' => $inputs["activities"],
                'performing_arts' => $inputs["performingArts"],
                'instruments' => $inputs["instruments"],
                'computer_skills' => $inputs["computerSkills"],
                'typing_speed' => $inputs["typingSpeed"],
                'awards' => $inputs["awards"],
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateSchools(StudentSchoolValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = SchoolsPage::updateOrCreate(
            ['application_id' => $id],
            [
                'name' => $inputs['schoolName'],
                'address' => $inputs['address'],
                'phone' => $inputs['phone'],
                'from_date' => $inputs['fromDate'],
                'to_date' => $inputs['toDate'],
                'grade_compleated' => $inputs['gradeCompleted'],
                'math_teacher' => $inputs['mathTeacher'],
                'english_teacher' => $inputs['englishTeacher'],
                'computer_teacher' => $inputs['computerTeacher'],
                'expelled' => $inputs['expelled'],
                'suspended' => $inputs['suspended'],
                'skipped' => $inputs['skippedGrade'],
                'iep' => $inputs['iep'],
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateAbilities(StudentAbilitiesValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = StrengthsNeedsPage::updateOrCreate(
            ['application_id' => $id],
            [
                'strengths' => $inputs["studentStrengths"],
                'needs' => $inputs["studentNeeds"],
                'disability' => $inputs["learningDisability"],
            ]
        );

        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateHousehold(StudentHouseholdValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = HouseholdInformationPage::updateOrCreate(
            ['application_id' => $id],
            [
                'first_name' => $inputs['firstName'],
                'middle_name' => $inputs['middleName'],
                'last_name' => $inputs['lastName'],
                'suffix' => $inputs['suffix'],
                'salutation' => $inputs['salutation'],
                'preferred_name' => $inputs['preferredName'],
                'gender' => $inputs['gender'],
                'relationship' => $inputs['studentRelationship'],
                'marital_status' => $inputs['maritalStatus'],
                'financial_responcibility' => $inputs['financialResponsibility'],
                'recieve_corrispondence' => $inputs['receiveCorrispondence'],
                'custodial_rights' => $inputs['custodialRights'],
                'email' => $inputs['emailAddress'],
                'work_phone' => $inputs['workPhone'],
                'home_phone' => $inputs['homePhone'],
                'cell_phone' => $inputs['cellPhone'],
                'occupation' => $inputs['occupation'],
                'employer' => $inputs['employer'],
                'employer_address' => $inputs['employerAddress'],
                'employer_city' => $inputs['employerCity'],
                'employer_state' => $inputs['employerState'],
                'employer_zip' => $inputs['employerZip'],
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateSiblings(StudentSiblingsValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = SiblingsPage::updateOrCreate(
            ['application_id' => $id],
            [
                'first_name' => $inputs['firstName'],
                'last_name' => $inputs['lastName'],
                'username' => $inputs['userName'],
                'student_id' => $inputs['studentID'],
                'relationship' => $inputs['relationship'],
                'years_attended' => $inputs['yearsAttended'],
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateParentQuestionair(ParentQuestionairValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = ParentQuestionairPage::updateOrCreate(
            ['application_id' => $id],
            [
                'question_one' => $inputs['questionOne'],
                'question_two' => $inputs['questionTwo'],
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateStudentQuestionair(StudentQuestionairValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = StudentQuestionairPage::updateOrCreate(
            ['application_id' => $id],
            [
                'question_one' => $inputs['questionOne'],
                'question_two' => $inputs['questionTwo'],
                'question_three' => $inputs['questionThree'],
            ]
        );

        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateRecommendation(StudentRecommendationValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = RecommendationPage::updateOrCreate(
            ['application_id' => $id],
            [
                'name' => $inputs['refferalName'],
                'email' => $inputs['refferalEmail'],
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateSignature(Request $request, $id)
    {
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function deleteStudent($id)
    {
        $application = Auth::user()->applications->find(intval($id));
        $application->delete();

        return redirect()->route('applications');
    }

}
