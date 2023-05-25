<x-mail::message>
# New Record Created

Hello,

A new record has been created with the following details:

- Name: {{ $record->name }}
- Surname: {{ $record->surname }}
- Email: {{ $record->email }}
- Date: {{ $record->date }}
- Type: {{ $record->type }}

Thank you,
Your Application
</x-mail::message>
