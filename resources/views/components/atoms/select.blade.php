<div>
    <x-numaxlab-atomic::atoms.forms.label :for="$attributes->get('id')" class="at-small">
        {{ $attributes->get('label') }}
    </x-numaxlab-atomic::atoms.forms.label>

    <x-numaxlab-atomic::atoms.forms.select :attributes="$attributes">
        {{ $slot }}
    </x-numaxlab-atomic::atoms.forms.select>

    <x-numaxlab-atomic::atoms.forms.input-error
        :messages="$errors->get($attributes->get('name'))"></x-numaxlab-atomic::atoms.forms.input-error>
</div>
