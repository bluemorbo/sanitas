<html>
    <head>
        <title>Blood Pressure Diary</title>
        <style>
            @import "http://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css";
            thead {
                display: table-header-group;
            }
            tfoot {
                display: table-row-group;
            }
            tr {
                page-break-inside: avoid;
            }
        </style>
    </head>
    <body>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Blood Pressure Diary</h1>
        <div class="mt-6">
            <p><b class="mr-4 text-gray-600">Name</b>....................................................</p>
        </div>
        <div class="mt-6">
            <p><b class="mr-4 text-gray-600">Date of Birth:</b>..........................................</p>
        </div>
        <table class="min-w-full divide-y divide-gray-400 mt-12">
            <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-right text-sm leading-4 font-medium text-gray-700 uppercase tracking-wider">
                    Date
                </th>
                <th class="px-6 py-3 bg-gray-50 text-right text-sm leading-4 font-medium text-gray-700 uppercase tracking-wider">
                    Time
                </th>
                <th class="px-6 py-3 bg-gray-50 text-right text-sm leading-4 font-medium text-gray-700 uppercase tracking-wider">
                    Systolic
                </th>
                <th class="px-6 py-3 bg-gray-50 text-right text-sm leading-4 font-medium text-gray-700 uppercase tracking-wider">
                    Diastolic
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-sm leading-4 font-medium text-gray-700 uppercase tracking-wider w-1/2">
                    Notes
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-400">
            @foreach($readings as $reading)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 font-medium text-gray-900 text-right">
                            {{ $reading->reading_date->format('d/m/Y') }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 font-medium text-gray-900 text-right">
                            {{ $reading->reading_date->format('H:i') }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 font-medium text-gray-900 text-right">
                            {{ $reading->systolic }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 font-medium text-gray-900 text-right">
                            {{ $reading->diastolic }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 font-medium text-gray-600">
                            {{ $reading->notes }}
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>
