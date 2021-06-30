<?php

namespace App\Http\Livewire\Profile;

use App\Models\Department;
use App\Models\Province;
use App\Models\District;
use Livewire\Component;

class DepartmentProvinceDistrite extends Component
{

    public $departments;
    public $provinces;
    public $districts;

    public $selectedDepartment = null;
    public $selectedProvince = null;
    public $selectedDistrict = null;


    public function mount($selectedDistrict = null)
    {
        $this->departments = Department::all();
        $this->provinces = collect();
        $this->districts = collect();
        $this->selectedDistrict = $selectedDistrict;

        if (!is_null($selectedDistrict)) {
            $district = District::with('province.department')->find($selectedDistrict);
            if ($district) {
                $this->districts = District::where('province_id', $district->province_id)->get();
                $this->provinces = Province::where('department_id', $district->province->department_id)->get();
                $this->selectedDepartment = $district->province->department_id;
                $this->selectedProvince = $district->province_id;
            }
        }
    }


    public function render()
    {
        return view('livewire.profile.department-province-distrite');
    }

    public function updatedSelectedDepartment($department)
    {
        $this->provinces = Province::where('department_id', $department)->get();
        $this->selectedProvince = NULL;
    }

    public function updatedSelectedProvince($province)
    {
        if (!is_null($province)) {
            $this->districts = District::where('province_id', $province)->get();
        }
    }
}
