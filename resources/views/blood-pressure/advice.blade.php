<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('sitemap.blood-pressure-advice') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 prose lg:prose-xl">
            <h3>Disclaimer</h3>
            <p>Sanitas is a tool for tracking blood pressure readings and should not replace professional medical advice.
                Blood pressure can be impacted by personal circumstances such as medication and so it is advised that you
                refrain from making any significant lifestyle changes unless otherwise advised to do so.</p>
            <p>All categories are defined in general terms rather than on an individual basis.</p>

            <h3>What is blood pressure?</h3>
            <p>Blood pressure is the measure of force that your heart uses to pump blood around your body.
            You may have seen your blood pressure measured in two numbers, e.g. <b>128 / 78</b>:</p>
            <ul>
                <li>Systolic (top number) - the pressure when your heart pushes blood out</li>
                <li>Diastolic (bottom number) - the pressure when your heart is between beats</li>
            </ul>

            <h3>Improving readings</h3>
            <p>For more reliable readings, try to be consistent with the time you take readings. It is recommended to wait
            at least 30 minutes after smoking, drinking caffeine or exercising before taking a reading.</p>
            <p>To reduce the likelihood of incorrect readings, please take at least 2 readings one or more minutes apart.
            If the numbers are very different, take a further 2 or 3 readings.</p>

            <h3>Categories</h3>

            <h4>Low</h4>
            <p>Low blood pressure is less common, and can be a side-effect of certain types of medication. Typically, the systolic
                pressure needs to be <b>less than 90mmHg</b> or the diastolic pressure needs to be <b>less than 60mmHg</b>.</p>

            <h4>Normal</h4>
            <p>Typically normal blood pressure is when the systolic pressure is <b>between 90 and 120mmHg</b> and the
            diastolic pressure is <b>between 60 and 90mmHg</b>.</p>

            <h4>Elevated</h4>
            <p>Typically elevated blood pressure is when the systolic pressure is <b>between 120 and 130mmHg</b> and the
                diastolic pressure is <b>less than 80mmHg</b>.</p>

            <h4>Hypertension Stage 1</h4>
            <p>Typically hypertension stage 1 is when the systolic pressure is <b>between 130 and 140mmHg</b> or the
                diastolic pressure is <b>between 80 and 90mmHg</b>.</p>

            <h4>Hypertension Stage 2</h4>
            <p>Typically hypertension stage 2 is when the systolic pressure is <b>between 140 and 180mmHg</b> or the
                diastolic pressure is <b>between 90 and 120mmHg</b>.</p>

            <h4>Hypertensive Crisis</h4>
            <p>Typically a hypertensive crisis is when the systolic pressure is <b>over 180mmHg</b> or the diastolic
                pressure is <b>over 120</b>. You should seek immediate medical advice if you get this reading repeatedly.</p>

            <h3>Further reading</h3>
            <p>
                For further information, see the
                <a class="inline-flex items-center px-1 pt-1 font-medium leading-5 text-chelsea-cucumber-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out text-chelsea-cucumber-600 hover:text-chelsea-cucumber-900 transition duration-150 ease-in-out" href="https://www.nhs.uk/common-health-questions/lifestyle/what-is-blood-pressure/" target="_blank">NHS website</a>.
            </p>
        </div>
    </div>
</x-app-layout>
