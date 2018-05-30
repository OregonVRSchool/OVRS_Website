<div class="dropdown">        
    <button class="dropbtn" data-toggle="collapse" data-target="#{{ session('applicant')['firstName'] }}Collapse" aria-controls="{{ session('applicant')['firstName'] }}Collapse" aria-expanded="true">{{ session('applicant')['firstName'] }}</button>
    <div class="dropdown-content collapse multi-collapse show" id="{{ session('applicant')['firstName'] }}Collapse">
        <ul>                
            <li><a href="{{ route('information.student.application', ['id' => session('applicant')['id']]) }}">Student Information</a></li>
            <li><a href="{{ route('interests.student.application', ['id' => session('applicant')['id']]) }}">Student Interests</a></li>
            <li><a href="{{ route('schools.student.application') }}">Previous Schools</a></li>
            <li><a href="{{ route('abilities.student.application') }}">Student Abilities</a></li>
            <li><a href="{{ route('household.student.application') }}">Household Information</a></li>
            <li><a href="{{ route('siblings.student.application') }}">Siblings</a></li>
            <li><a href="{{ route('parentQuestionair.student.application') }}">Parent Questionair</a></li>
            <li><a href="{{ route('studentQuestionair.student.application') }}">Student Questionar</a></li>
            <li><a href="{{ route('recommendation.student.application') }}">Recommendation</a></li>
            <li><a href="{{ route('signature.student.application') }}">Electronic Signature</a></li>
        </ul>
    </div>    
</div>