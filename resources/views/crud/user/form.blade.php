<div>
    <div class="form-group">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" value="{{ $user->name }}" 
            class="text-input" disabled/>
    </div>
    <div class="form-group">
        <label class="form-label">Roles</label>
        <select name="roles" class="form-control" required>
            <option value="">Selecciona un rol</option>
            @if ($userRoles)
                @foreach ($roles as $role)
                    @if ($userRoles->role_id == $role->id)
                        <option value="{{$role->id}}" selected>{{$role->name}}</option>
                    @else
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endif
                @endforeach
            @else
                @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            @endif
        </select>
        <x-jet-input-error for="roles" />
    </div>
    
</div>
<div class="mt-5">
    <a href="{{ url()->previous() }}" class="cancel-button">
        Cancelar
    </a>
    <x-jet-button type="submit">
        Registrar
    </x-jet-button>
</div>
</div>