@include('layouts.navigation')




<main class="my-4">


    <div class="basicInfo flex justify-between">
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
    <div class="unitDetails flex justify-between">
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

    <div class="medReport">
        <div>
            <p>{{ $showCadet->record->presenting_complaint }}</p>
        </div>
    </div>



</main>