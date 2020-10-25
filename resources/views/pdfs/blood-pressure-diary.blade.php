<html>
    <head>
        <title>Blood Pressure Diary</title>
        <style>
            html {font-family:system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";line-height:1.5}
            thead { display: table-header-group; }
            tfoot { display: table-row-group; }
            tr { page-break-inside: avoid; }
            .bg-gray-50 { background-color: #F9FAFB; }
            .font-medium { font-weight: 500; }
            .font-semibold { font-weight:600 }
            .leading-tight { line-height: 1.25; }
            .w-full { width: 100% }
            .mr-4 { margin-right: 1rem }
            .mt-6 { margin-top: 1.5rem; }
            .mt-12 { margin-top: 3rem; }
            .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
            .py-3 { padding-top: 0.75rem; padding-bottom: 0.75rem; }
            .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
            .text-gray-600 { color: #718096; }
            .text-gray-700 { color: #4a5568; }
            .text-gray-800 { color: #2d3748; }
            .text-gray-900 { color: #1a202c; }
            .text-left { text-align: left; }
            .text-right { text-align: right; }
            .text-sm { font-size: 0.875rem; }
            .text-xl { font-size: 1.25rem; }
            .uppercase { text-transform: uppercase }
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
        <table class="w-full divide-y divide-gray-400 mt-12">
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
