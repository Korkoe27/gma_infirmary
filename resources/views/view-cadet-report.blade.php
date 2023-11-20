@include('layouts.navigation')




<main class="my-4 m-auto flex justify-evenly bg-white">


    <div class="basicInfo mx-4">
        <div class="passportPhoto">

        </div>
        <div class="service_number mx-1">
            <p>{{ $showCadet->service_number }}</p>
        </div>
        <div class="rank mx-1">
            <p>{{ $showCadet->rank }}</p>
        </div>
        <div class="surname mx-1">
            <p>{{ $showCadet->surname }}</p>
        </div>
        <div class="other_name mx-1">
            <p>{{ $showCadet->other_name }}</p>
        </div>
        <div class="first_name mx-1">
            <p>{{ $showCadet->first_name }}</p>
        </div>
        <div class="gender mx-1">
            <p>{{ $showCadet->gender }}</p>
        </div>
        <div class="dob mx-1">
            <p>{{ $showCadet->date_of_birth }}</p>
        </div>
    </div>
    <div class="unitDetails mx-4 justify-between">
        <div class="mx-1 platoon">
            <p class="platoon">{{ $showCadet->platoon }}</p>
        </div>
        <div class="mx-1 company">
            <p class="company">{{ $showCadet->company }}</p>
        </div>
        <div class="mx-1 intake">
            <p class="intake">{{ $showCadet->intake }}</p>
        </div>
    </div>

@if ($showCadet->record)
    
    <div class="medReport mx-4">
        <div>
            <p>{{ $showCadet->record->presenting_complaint }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->history_presenting_complaint }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->on_direct_questioning }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->past_medical_history }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->drug_history }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->family_history }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->social_history }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->on_examination }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->cardiovascular_system }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->respiratory_system }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->central_nervous_system }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->musculoskeletal_system }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->diagnosis }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->treatment }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->referral }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->excuse_physical_training }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->excuse_duty }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->excuse_riffle_drill }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->excuse_boot }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->excuse_shaving }}</p>
        </div>
        <div>
            <p>{{ $showCadet->record->summary }}</p>
        </div>
    </div>
@else
    <p>No medical records</p>
@endif




</main>