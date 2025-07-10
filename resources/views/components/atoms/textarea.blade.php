<div>
    <x-numaxlab-atomic::atoms.forms.label :for="$attributes->get('id')" class="at-small">
        {{ $slot }}
    </x-numaxlab-atomic::atoms.forms.label>

    <x-numaxlab-atomic::atoms.forms.textarea :attributes="$attributes"></x-numaxlab-atomic::atoms.forms.textarea>

    <x-numaxlab-atomic::atoms.forms.input-error
        :messages="$errors->get($attributes->get('name'))"></x-numaxlab-atomic::atoms.forms.input-error>
</div>
