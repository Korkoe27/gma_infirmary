@include('layouts.navigation')




{{-- <main class=""> --}}




    {{-- <div class="flex "> --}}









        <main class="my-20 ml-12 bg-white flex static">



        <form action="{{ route('patientRecords.store') }}"  id="personnelRecords" method="POST">
            @csrf

    <div class="my-16 flex flex-wrap ">


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
                   <input type="text" name="rank" id="rank" required placeholder="Active Input" class="w-full bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
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
                   <input type="text" id="other_name" name="other_name" required placeholder="Other Name" class="w-full bg-transparent rounded-md border border-primary py-[10px] px-5 text-dark-5 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
                </div>
            </div>
            <div class="w-full px-4 page md:w-1/2 lg:w-1/3">
                <div class="mb-12">
                    <label for="gender" class="mb-[10px]  block text-base font-medium text-black">Gender</label>
                    <select name="gender" id="gender" class="block w-full rounded-md border-[1.5px] py-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option selected>--Gender--</option>
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
                    <label for="intake" class="mb-[10px]  block text-base font-medium text-black">Intake</label>
                    <select name="intake" id="intake" class="block w-full rounded-md border-[1.5px] py-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option selected>...</option>
                        <option value="RCC">Regular Career Course</option>
                        <option value="SSC/SD">Short Service Commision / Special Duty</option>
                        <option value="SMI">Special Medical Intake</option>
                    </select>
                </div>
            </div>

            


            

        </div>

            <div class="flex w-full mx-auto justify-center">
                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  w-1/5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
            </div>



        </form>
        












</main>





























{{-- 


</x-app-layout> --}}