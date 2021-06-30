<div>
    <div class="form-group row">
        <label for="department" class="col-md-4 col-form-label text-md-right">Departamento</label>

        <div class="col-md-6">
            <select wire:model="selectedDepartment" class="form-control" name="department_id">
                <option value="" selected>Selecciona un departamento</option>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}" >{{ $department->name }}</option>
                @endforeach
            </select>
            @error('department_id')
                <div class="text-danger fs-15 mt-1">{{$message}}</div>
            @enderror
        </div>
    </div>

    @if (!is_null($selectedDepartment))
        <div class="form-group row">
            <label for="province" class="col-md-4 col-form-label text-md-right">Provincia</label>

            <div class="col-md-6">
                
                <select wire:model="selectedProvince" class="form-control" name="province_id">
                    <option value="" selected>Selecciona una provincia</option>
                    @foreach($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                    @endforeach
                </select>
                @error('province_id')
                    <div class="text-danger fs-15 mt-1">{{$message}}</div>
                @enderror
            </div>
        </div>
    @endif

    @if (!is_null($selectedProvince))
        <div class="form-group row">
            <label for="district" class="col-md-4 col-form-label text-md-right">Distrito</label>

            <div class="col-md-6">
                <select wire:model="selectedDistrict" class="form-control" name="district_id">
                    <option value="" selected>Selecciona un distrito</option>
                    @foreach($districts as $district)
                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                    @endforeach
                </select>
                @error('district_id')
                    <div class="text-danger fs-15 mt-1">{{$message}}</div>
                @enderror 
            </div>
        </div>
    @endif

    
</div>