@include('layouts.navigation')




{{-- <main class=""> --}}




    {{-- <div class="flex "> --}}









        <main class=" ml-12 bg-white flex static">



        <form action="{{ route('patientRecords.store') }}" enctype="multipart/form-data"  id="personnelRecords" method="POST">
            @csrf

    <div class="mt-16 flex flex-wrap ">


            <div class=" w-full px-4 page md:w-1/2 lg:w-1/3">
                    <div class="mb-12">
                       <label for="date_of_birth" class="mb-[10px] block text-base font-medium text-black">
                       Date
                       </label>
                       <input type="date" placeholder="Active Input" name="date_of_birth" required id="date_of_birth" class="w-full bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
                    </div>

            </div>
            <div class=" w-full px-4 page md:w-1/2 lg:w-1/3">
                <div class="mb-12">
                   <label for="service_number" class="mb-[10px]  block text-base font-medium text-black">
                   Service Number
                   </label>
                   <input type="text" name="service_number" required id="service_number" placeholder="Service Number" class="w-full bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
                </div>
            </div>
            
            <div class="page w-full px-4 page md:w-1/2 lg:w-1/3">
                <div class="mb-12">
                   <label for="rank" class="mb-[10px] block text-base font-medium text-black">
                   Rank
                   </label>
                   <select name="rank" id="rank" class="block w-full rounded-md border-[1.5px] py-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option selected value="">--Rank--</option>
                        <option value="N/Cdt">N/Cdt</option>
                            <option value="O/Cdt">O/Cdt</option>
                            <option value="S/Cdt">S/Cdt</option>
                            <option value="Mid">Mid</option>
                            <option value="F/Cdt">F/Cdt</option>
                   </select>
                </div>
            </div>
            <div class="w-full px-4 page md:w-1/2 lg:w-1/3">
                <div class="mb-12">
                   <label for="surname" class="mb-[10px] block text-base font-medium text-black">
                   Surname
                   </label>
                   <input type="text" name="surname" id="surname" required placeholder="Surname" class="w-full bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
                </div>
            </div>

            <div class="w-full px-4 page md:w-1/2 lg:w-1/3">
                <div class="mb-12">
                   <label for="first_name" class="mb-[10px] block text-base font-medium text-black">
                   First Name
                   </label>
                   <input type="text" id="first_name" required name="first_name" placeholder="First Name" class="w-full bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
                </div>
            </div>

            <div class="w-full px-4 page md:w-1/2 lg:w-1/3">
                <div class="mb-12">
                   <label for="other_name" class="mb-[10px] block text-base font-medium text-black">
                   Other Name
                   </label>
                   <input type="text" id="other_name" name="other_name" placeholder="Other Name" class="w-full bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
                </div>
            </div>
            <div class="w-full px-4 page md:w-1/2 lg:w-1/3">
                <div class="mb-12">
                    <label for="gender" class="mb-[10px]  block text-base font-medium text-black">Gender</label>
                    <select name="gender" id="gender" class="block w-full rounded-md border-[1.5px] py-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option selected value="">--Gender--</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </div>
            </div>


            <div class="w-full px-4 page md:w-1/2 lg:w-1/3">
                <div class="mb-12">
                   <label for="platoon" class="mb-[10px] block text-base font-medium text-black">
                    Platoon
                   </label>
                   <input type="text" name="platoon" id="platoon" placeholder="Platoon" class="w-full bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
                </div>
            </div>

            <div class="w-full px-4 page md:w-1/2 lg:w-1/3">
                <div class="mb-12">
                   <label for="company" class="mb-[10px] block text-base font-medium text-black">
                    Company
                   </label>
                   <input type="text" name="company" id="company" placeholder="Company" class="w-full bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
                </div>
            </div>

            <div class="w-full px-4 page md:w-1/2 lg:w-1/3">
                <div class="mb-12">
                    <label for="intake" class="mb-[10px] block text-base font-medium text-black">Intake</label>
                    <select name="intake" id="intake" class="block w-full rounded-md border-[1.5px] py-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option selected value="">--Intake--</option>
                        <option value="RCC">Regular Career Course</option>
                        <option value="SSC/SD">Short Service Commision / Special Duty</option>
                        <option value="SMI">Special Medical Intake</option>
                    </select>
                </div>
            </div>

            <div class="w-full px-4 page md:w-1/2 lg:w-1/3">
                <div class="mb-12">
                   <label for="image" class="mb-[10px] block text-base font-medium text-black">
                    Passport Size Photo
                   </label>
                   <input type="file" name="cadet_image" id="image"class="w-full bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
                </div>
            </div>


        
        </div>

            <div class="flex w-full mx-auto justify-center">
                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5   w-1/5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
            </div>



        </form>
        












</main>






<script>



    // function checkSelect(){
    //     const rankSelect = document.getElementById("rank");
    //     const genderSelect = document.getElementById("gender");
    //     const intakeSelect = document.getElementById("intake");

    //     const selectLists = [
    //         rankSelect,
    //         genderSelect,
    //         intakeSelect
    //     ];


    //     selectLists.forEach(element => {
            
    //     });
    // }

    // document.getElementById('personnelRecords').onsubmit = function(event) {

    //     break;
    //     const rankSelect = document.getElementById("rank");
    //     const genderSelect = document.getElementById("gender");
    //     const intakeSelect = document.getElementById("intake");

    //     const selectLists = [
    //         rankSelect,
    //         genderSelect,
    //         intakeSelect
    //     ];

    //     let isValid = true;

    //     selectLists.forEach(selectId => {
    //         const selectElement = document.getElementById('selectId');


    //         if(selectElement.value === 'null') {
    //             isValid = false;
    //         }
    //     });

    //     if(!isValid) {
    //         alert("Please select an option in all select fields before submitting. Do not select the first option.");
    //         event.preventDefault();
    //     }
        
        

    // }
     


</script>






















{{-- 


</x-app-layout> --}}