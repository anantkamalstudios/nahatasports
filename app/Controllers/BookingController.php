<?php

namespace App\Controllers;
use App\Models\BookingModel;

class BookingController extends BaseController
{
    public function submit_booking()
    {
        $court          = $this->request->getPost('selected_court');
        $slots          = json_decode($this->request->getPost('selected_slots'), true);
        $selectedDate   = $this->request->getPost('selected_date');
        $userId         = session()->get('user_id');  

        if ($court && $slots && $selectedDate) {
            $model = new BookingModel();

            foreach ($slots as $slotId) {
                $model->insert([
                    'user_id'      => $userId,
                    'booking_date' => $selectedDate,
                    'court_name'   => $court,
                    'time_slot'    => $slotId,  
                    'price'        => 300  
                ]);
            }

            return redirect()->to('booking_summary')->with('success', 'Booking Confirmed!');
        } else {
            return redirect()->back()->with('error', 'Please select court, slot, and date.');
        }
    }


}
