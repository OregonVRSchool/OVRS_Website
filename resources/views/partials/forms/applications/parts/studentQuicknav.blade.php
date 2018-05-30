<div class="dropdown">        
    <button class="dropbtn" data-toggle="collapse" data-target="#{{ session('applicant')['firstName'] }}Collapse" aria-controls="{{ session('applicant')['firstName'] }}Collapse" aria-expanded="true">{{ session('applicant')['firstName'] }}</button>
    <div class="dropdown-content collapse multi-collapse show" id="{{ session('applicant')['firstName'] }}Collapse">
        <ul>                
            <li><a href="{{ route('information.student.application', ['id' => session('applicant')['id']]) }}">Student Information</a></li>
            <li><a href="{{ route('interests.student.application', ['id' => session('applicant')['id']]) }}">Student Interests</a></li>
            <li><a href="{{ route('schools.student.application', ['id' => session('applicant')['id']]) }}">Previous Schools</a></li>
            <li><a href="{{ route('abilities.student.application', ['id' => session('applicant')['id']]) }}">Student Abilities</a></li>
            <li><a href="{{ route('household.student.application', ['id' => session('applicant')['id']]) }}">Household Information</a></li>
            <li><a href="{{ route('siblings.student.application', ['id' => session('applicant')['id']]) }}">Siblings</a></li>
            <li><a href="{{ route('parentQuestionair.student.application', ['id' => session('applicant')['id']]) }}">Parent Questionair</a></li>
            <li><a href="{{ route('studentQuestionair.student.application', ['id' => session('applicant')['id']]) }}">Student Questionar</a></li>
            <li><a href="{{ route('recommendation.student.application', ['id' => session('applicant')['id']]) }}">Recommendation</a></li>
            <li><a href="{{ route('signature.student.application', ['id' => session('applicant')['id']]) }}">Electronic Signature</a></li>
        </ul>
    </div>    
</div>