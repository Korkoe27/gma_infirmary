@include('layouts.navigation')



    <main class="mt-20 ml-32 bg-white">

  


        <form action="{{ route('medicalRecords.store') }}" method="POST">


            @csrf
  <div class="flex flex-col flex-wrap md:flex-row">
    <div class=" w-full px-4 page md:w-1/2 lg:w-1/3">
        <div class="mb-12">
           <label for="service_number" class="mb-[10px]  block text-base font-medium text-white">
           Service Number
           </label>
           <select name="service_number" id="service_number" class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]">
            <option value="">--Select Service Number</option>
            @foreach($cadets as $cadet)
            <option value="{{ $cadet->service_number }}">{{ $cadet->service_number }} {{ $cadet->rank }} {{ $cadet->surname }}</option>
            @endforeach

           </select>
        </div>
    </div>
    <div class="px-4 md:w-1/2 page lg:w-1/3">
        <div class="mb-12">
            <label for="presenting_complaint" class="mb-3 block text-base font-medium text-black">
            Presenting Complaint
            </label>
            <textarea
                placeholder="Default textarea" name="presenting_complaint" id="presenting_complaint" required
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full px-4 page md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="history_presenting_complaint" class="mb-3 block text-base font-medium text-black">
                History Presenting Complaint
            </label>
            <textarea
                placeholder="History Presenting Complaint" required id="history_presenting_complaint" name="history_presenting_complaint"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full px-4 page md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="on_direct_questioning" class="mb-3 block text-base font-medium text-black">
                On Direct Questioning
            </label>
            <textarea
                placeholder="On Direct Questioning" required id="on_direct_questioning" name="on_direct_questioning"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full px-4 page md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="past_medical_history" class="mb-3 block text-base font-medium text-black">
                Past Medical history
            </label>
            <textarea
                placeholder="Past Medical history" required id="past_medical_history" name="past_medical_history"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full px-4 page md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="drug_history" class="mb-3 block text-base font-medium text-black">
                Drug History
            </label>
            <textarea
                placeholder="Drug History" required id="drug_history" name="drug_history"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>

</div>
<div class="w-full px-4 page md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="family_history" class="mb-3 block text-base font-medium text-black">
                Family History
            </label>
            <textarea
                placeholder="Family History" required id="family_history" name="family_history"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full px-4 page md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="social_history" class="mb-3 block text-base font-medium text-black">
                Social History
            </label>
            <textarea
                placeholder="Social History" required id="social_history" name="social_history"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full page px-4 md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="on_examination" class="mb-3 block text-base font-medium text-black">
                On Examination
            </label>
            <textarea
                placeholder="On Examination" required id="on_examination" name="on_examination"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full page px-4 md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="cardiovascular_system" class="mb-3 block text-base font-medium text-black">
                Cardiovascular System
            </label>
            <textarea
                placeholder="Cardiovascular System" required id="cardiovascular_system" name="cardiovascular_system"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full page px-4 md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="respiratory_system" class="mb-3 block text-base font-medium text-black">
                Respiratory System
            </label>
            <textarea
                placeholder="Respiratory System" required id="respiratory_system" name="respiratory_system"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full page px-4 md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="abdominal_system" class="mb-3 block text-base font-medium text-black">
                Abdominal System
            </label>
            <textarea
                placeholder="Respiratory System" required id="abdominal_system" name="abdominal_system"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full page px-4 md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="central_nervous_system" class="mb-3 block text-base font-medium text-black">
                Central Nervous System
            </label>
            <textarea
                placeholder="Central Nervous System" required id="central_nervous_system" name="central_nervous_system"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full page px-4 md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="musculoskeletal_system" class="mb-3 block text-base font-medium text-black">
                Musculoskeletal System
            </label>
            <textarea
                placeholder="Musculoskeletal System" required id="musculoskeletal_system" name="musculoskeletal_system"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full page px-4 md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="diagnosis" class="mb-3 block text-base font-medium text-black">
                Diagnosis
            </label>
            <textarea
                placeholder="Diagnosis" required id="diagnosis" name="diagnosis"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full page px-4 md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="treatment" class="mb-3 block text-base font-medium text-black">
                Treatment
            </label>
            <textarea
                placeholder="Treatment" required id="treatment" name="treatment"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full page px-4 md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="referral" class="mb-3 block text-base font-medium text-black">
                Referral
            </label>
            <textarea
                placeholder="Referral" required id="referral" name="referral"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full page px-4 md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="excuse_physical_training" class="mb-3 block text-base font-medium text-black">
                Excuse Physical Training
            </label>
            <textarea
                placeholder="Excuse Physical Training" required id="excuse_physical_training" name="excuse_physical_training"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full page px-4 md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="excuse_duty" class="mb-3 block text-base font-medium text-black">
                Excuse Duty
            </label>
            <textarea
                placeholder="Excuse Duty" required id="excuse_duty" name="excuse_duty"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full px-4 md:w-1/2 page lg:w-1/3">
        <div class="mb-12">
            <label for="excuse_riffle_drill" class="mb-3 block text-base font-medium text-black">
                Excuse Riffle Drill
            </label>
            <textarea
                placeholder="Excuse Riffle Drill" required id="excuse_riffle_drill" name="excuse_riffle_drill"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full px-4 md:w-1/2 page lg:w-1/3">
        <div class="mb-12">
            <label for="excuse_boot" class="mb-3 block text-base font-medium text-black">
                Excuse Boot
            </label>
            <textarea
                placeholder="Excuse Riffle Drill" required id="excuse_boot" name="excuse_boot"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full px-4 page md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="excuse_shaving" class="mb-3 block text-base font-medium text-black">
                Excuse Shaving
            </label>
            <textarea
                placeholder="Excuse Shaving" required id="excuse_shaving" name="excuse_shaving"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>
<div class="w-full px-4 page md:w-1/2 lg:w-1/3">
        <div class="mb-12">
            <label for="summary" class="mb-3 block text-base font-medium text-black">
                Summary
            </label>
            <textarea
                placeholder="Summary" required id="summary" name="summary"
                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                ></textarea>
        </div>
</div>


<div class="flex w-full mx-auto justify-center">
    <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 h-full w-1/6 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
</div>


</form>
</div>




































</main>










