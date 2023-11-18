@include('layouts.navigation')








<main class="flex justify-center align-middle">

<div class="shadow-md  justify-center sm:rounded-lg w-full">
    <table class="w-full px-auto text-sm text-left text-gray-500    ">
        <thead class="text-xs text-white uppercase bg-black dark:bg-black-700 dark:text-white-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Service Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Rank
                </th>
                <th scope="col" class="px-6 py-3">
                    Surname
                </th>
                <th scope="col" class="px-6 py-3">
                    First Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Intake
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($cadets as $cadet )
            <tr class="bg-white border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-black">
                   {{ $cadet-> service_number}}
                </th>
                <td class="px-6 py-4 text-black">
                    {{ $cadet-> rank }}
                </td>
                <td class="px-6 py-4 text-black">
                    {{ $cadet-> surname }}
                </td>
                <td class="px-6 py-4 text-black">
                   {{ $cadet-> first_name}}
                </td>
                <td class="px-6 py-4 text-black">
                   {{ $cadet -> intake}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('medicalRecords.create') }}" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Add Med Records</a>
                </td>
                </td>
                <td class="px-6 py-4">
                    <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('patientRecords.show', [$cadet->service_number]) }}" class="font-medium text-green-600 dark:text-green-500 hover:underline">View</a>
                </td>
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
            </tr>
           


            @endforeach
        </tbody>
    </table>
</div>


{{-- </main> --}}