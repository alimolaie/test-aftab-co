<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationSweetAlert extends Component
{
    protected $listeners = ['remove'];
    public function render()
    {
        return view('admin.monasebats.index');
    }
    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'با موفقیت درست  شد',
                'text' => 'رکورد مورد نظر با موفقیت درست  شد'
            ]);
    }
    public function alertConfirm()
    {
        $this->dispatchBrowserEvent('swal:confirm', [
                'type' => 'warning',
                'message' => 'آیا مطمئن هستید',
                'text' => 'اگر پاک شود در وبسایت هم پاک میشود'
            ]);
    }
    public function remove()
    {
        /* Write Delete Logic */
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'با موفقیت پاک شد',
                'text' => 'رکورد مورد نظر با موفیت پاک شد'
            ]);
    }
}
