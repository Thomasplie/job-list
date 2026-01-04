<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="post" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Proffesor"/>
        <x-forms.input label="Salary" name="salary" placeholder="$70.000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Wijnhaven, Rotterdam"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://thisisalink.com/jobs/proffesor-wanted"/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

        <x-forms.divider/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Frontend, Backend, API"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
