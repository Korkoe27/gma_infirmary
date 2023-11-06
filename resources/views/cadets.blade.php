@include('layouts.navigation')








<main>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
            </tr>
        </thead>
        <tbody>

            @foreach ($cadets as $cadet )
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{ $cadet-> service_number}}
                </th>
                <td class="px-6 py-4">
                    {{ $cadet-> rank }}
                </td>
                <td class="px-6 py-4">
                    {{ $cadet-> surname }}
                </td>
                <td class="px-6 py-4">
                   {{ $cadet-> first_name}}
                </td>
                <td class="px-6 py-4">
                   {{ $cadet -> intake}}
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
           


            @endforeach
        </tbody>
    </table>
</div>


</main>