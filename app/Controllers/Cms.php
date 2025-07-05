<?php

namespace App\Controllers;

use App\Models\HeroModel;
use App\Models\CoachingProgramModel;
use App\Models\CourtGroundModel;
use App\Models\CenterModel;
use App\Models\StudentParentFeatureModel;
use App\Models\EventAnnouncementModel;
use App\Models\FaqModel;

class Cms extends BaseController
{
    // public function hero()
    // {
    //     return view('cms/hero');
    // }

    public function hero()
{
    $model = new \App\Models\HeroModel();

    $data['slides'] = $model->findAll(); 

    return view('cms/hero', $data);
}

    public function add_hero()
    {
        return view('cms/add_hero');
    }

    public function save_hero()
    {
        $model = new HeroModel();

        $image = $this->request->getFile('slide_image');
        $title = $this->request->getPost('slide_title');
        $description = $this->request->getPost('slide_description');
        $button1_text = $this->request->getPost('button1_text');
        $button1_url = $this->request->getPost('button1_url');
        $button2_text = $this->request->getPost('button2_text');
        $button2_url = $this->request->getPost('button2_url');

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move('uploads/hero/', $newName);

            $model->save([
                'image' => 'uploads/hero/' . $newName,
                'title' => $title,
                'description' => $description,
                'button1_text' => $button1_text,
                'button1_url' => $button1_url,
                'button2_text' => $button2_text,
                'button2_url' => $button2_url
            ]);

            return redirect()->to('/add_hero')->with('success', 'Hero slide added successfully!');
        }

        return redirect()->back()->with('error', 'Image upload failed!');
    }

    // Show edit form
public function edit_hero($id)
{
    $model = new \App\Models\HeroModel();
    $slide = $model->find($id);

    if (!$slide) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Slide not found");
    }

    return view('cms/edit_hero', ['slide' => $slide]);
}

// Handle update
public function update_hero($id)
{
    $model = new \App\Models\HeroModel();
    $slide = $model->find($id);

    if (!$slide) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Slide not found");
    }

    $data = [
        'title' => $this->request->getPost('slide_title'),
        'description' => $this->request->getPost('slide_description'),
        'button1_text' => $this->request->getPost('button1_text'),
        'button1_url' => $this->request->getPost('button1_url'),
        'button2_text' => $this->request->getPost('button2_text'),
        'button2_url' => $this->request->getPost('button2_url')
    ];

    // If new image uploaded
    $image = $this->request->getFile('slide_image');
    if ($image && $image->isValid() && !$image->hasMoved()) {
        $newName = $image->getRandomName();
        $image->move('uploads/hero/', $newName);
        $data['image'] = 'uploads/hero/' . $newName;
    }

    $model->update($id, $data);

    return redirect()->to('/hero_list')->with('success', 'Slide updated successfully!');
}

// Delete slide
public function delete_hero($id)
{
    $model = new \App\Models\HeroModel();
    $model->delete($id);

    return redirect()->to('/hero')->with('success', 'Slide deleted successfully!');
}


// 

// public function program()
//     {
//         return view('cms/program');
//     }


    public function program()
{
    $model = new \App\Models\CoachingProgramModel();

    $data['programs'] = $model->findAll(); 

    return view('cms/program', $data);
}


public function add_program()
{
    return view('cms/add_program');
}


public function save_program()
{
    $model = new \App\Models\CoachingProgramModel();

    $image = $this->request->getFile('image');
    $title = $this->request->getPost('title');
    $location = $this->request->getPost('location');
    $age_group = $this->request->getPost('age_group');
    $timings = $this->request->getPost('timings');
    $booking_url = $this->request->getPost('booking_url');

    if ($image && $image->isValid() && !$image->hasMoved()) {
        $newName = $image->getRandomName();
        $image->move('uploads/coaching/', $newName);

        $model->save([
            'title' => $title,
            'image' => 'uploads/coaching/' . $newName,
            'location' => $location,
            'age_group' => $age_group,
            'timings' => $timings,
            'booking_url' => $booking_url
        ]);

        return redirect()->to('/add_program')->with('success', 'Coaching program added successfully!');
    }

    return redirect()->back()->with('error', 'Image upload failed!');
}

//  public function edit_program()
//     {
//         return view('cms/edit_program');
//     }

public function edit_program($id)
{
    $model = new \App\Models\CoachingProgramModel();
    $program = $model->find($id);

    if (!$program) {
        return redirect()->back()->with('error', 'Program not found.');
    }

    return view('cms/edit_program', ['program' => $program]);
}
public function update_program($id)
{
    $model = new \App\Models\CoachingProgramModel();
    $program = $model->find($id);

    if (!$program) {
        return redirect()->back()->with('error', 'Program not found.');
    }

    $data = [
        'title' => $this->request->getPost('title'),
        'location' => $this->request->getPost('location'),
        'age_group' => $this->request->getPost('age_group'),
        'timings' => $this->request->getPost('timings'),
        'booking_url' => $this->request->getPost('booking_url'),
    ];

    $image = $this->request->getFile('image');
    if ($image && $image->isValid() && !$image->hasMoved()) {
        $newName = $image->getRandomName();
        $image->move('uploads/coaching/', $newName);
        $data['image'] = 'uploads/coaching/' . $newName;
    }

    $model->update($id, $data);

    return redirect()->to('/program')->with('success', 'Program updated successfully!');
}

// Delete slide
public function delete_program($id)
{
    $model = new \App\Models\CoachingProgramModel();
    $model->delete($id);

    return redirect()->to('/program')->with('success', 'Slide deleted successfully!');
}

//  public function courtorground()
//     {
//         return view('cms/courtorground');
//     }

public function courtorground()
{
    $model = new \App\Models\CourtGroundModel();
    $courts = $model->findAll();

    return view('cms/courtorground', ['courts' => $courts]);
}

    
 public function add_courtorground()
    {
        return view('cms/add_courtorground');
    }

    public function save_courtorground()
{
    $model = new \App\Models\CourtGroundModel();

    $image = $this->request->getFile('image');
    $name = $this->request->getPost('name');
    $description = $this->request->getPost('description');
    $booking_url = $this->request->getPost('booking_url');

    if ($image && $image->isValid() && !$image->hasMoved()) {
        $newName = $image->getRandomName();
        $image->move('uploads/courts/', $newName);

        $model->save([
            'name' => $name,
            'description' => $description,
            'image' => 'uploads/courts/' . $newName,
            'booking_url' => $booking_url
        ]);

        return redirect()->to('/add_courtorground')->with('success', 'Court/Ground added successfully!');
    }

    return redirect()->back()->with('error', 'Image upload failed!');
}


public function edit_courtorground($id)
{
    $model = new \App\Models\CourtGroundModel();
    $court = $model->find($id);

    if (!$court) {
        return redirect()->back()->with('error', 'Court or Ground not found.');
    }

    return view('cms/edit_courtorground', ['court' => $court]);
}


public function update_courtorground($id)
{
    $model = new \App\Models\CourtGroundModel();
    $court = $model->find($id);

    if (!$court) {
        return redirect()->back()->with('error', 'Court or Ground not found.');
    }

    $name = $this->request->getPost('name');
    $description = $this->request->getPost('description');
    $booking_url = $this->request->getPost('booking_url');

    // Check if new image uploaded
    $image = $this->request->getFile('image');
    if ($image && $image->isValid() && !$image->hasMoved()) {
        $newName = $image->getRandomName();
        $image->move('uploads/courts/', $newName);
        $imagePath = 'uploads/courts/' . $newName;
    } else {
        // Keep old image if no new one uploaded
        $imagePath = $court['image'];
    }

    $model->update($id, [
        'name' => $name,
        'description' => $description,
        'booking_url' => $booking_url,
        'image' => $imagePath
    ]);

    return redirect()->to('/courtorground')->with('success', 'Court or Ground updated successfully!');
}

// Delete slide
public function delete_courtorground($id)
{
    $model = new \App\Models\CourtGroundModel();
    $model->delete($id);

    return redirect()->to('/courtorground')->with('success', 'Slide deleted successfully!');
}

public function multicenter()
{
    $model = new \App\Models\CenterModel();

    // Fetch all multi-center records from DB
    $multicenters = $model->findAll();

    // Pass data to the view
    return view('cms/multicenter', ['multicenters' => $multicenters]);
}





     public function add_multicenter()
    {
        return view('cms/add_multicenter');
    }
    public function save_multicenter()
{
    $model = new \App\Models\CenterModel();

    $name = $this->request->getPost('name');
    $address = $this->request->getPost('address');
    $map_url = $this->request->getPost('map_url');
    $sports = $this->request->getPost('sports');
    $sports_json = json_encode(array_map('trim', explode(',', $sports)));

    $uploadedImages = $this->request->getFileMultiple('images');
    $imagePaths = [];

    if ($uploadedImages) {
        foreach ($uploadedImages as $image) {
            if ($image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('uploads/multicenters/', $newName);
                $imagePaths[] = 'uploads/multicenters/' . $newName;
            }
        }

        $model->save([
            'name'    => $name,
            'address' => $address,
            'map_url' => $map_url,
            'sports'  => $sports_json,
            'images'  => json_encode($imagePaths)
        ]);

        return redirect()->to('/add_multicenter')->with('success', 'Multi-Center added successfully!');
    }

    return redirect()->back()->with('error', 'Image upload failed!');
}



        public function edit_multicenter($id)
        {
            $model = new \App\Models\CenterModel();
            $center = $model->find($id);

            if (!$center) {
                return redirect()->back()->with('error', 'Multi-center not found');
            }

            return view('cms/edit_multicenter', ['center' => $center]);
        }
        public function update_multicenter($id)
            {
                $model = new \App\Models\CenterModel();

                // Find existing record
                $center = $model->find($id);
                if (!$center) {
                    return redirect()->back()->with('error', 'Multi-center not found');
                }

                // Get form inputs
                $name = $this->request->getPost('name');
                $address = $this->request->getPost('address');
                $map_url = $this->request->getPost('map_url');
                $sports = $this->request->getPost('sports');

                // Handle images
                $existingImages = json_decode($center['images'], true) ?: [];
                $uploadedImages = $this->request->getFiles()['images'] ?? [];

                // Upload new images if any
                if (!empty($uploadedImages) && is_array($uploadedImages)) {
                    foreach ($uploadedImages as $image) {
                        if ($image && $image->isValid() && !$image->hasMoved()) {
                            $newName = $image->getRandomName();
                            $image->move('uploads/multicenters/', $newName);
                            $existingImages[] = 'uploads/multicenters/' . $newName;
                        }
                    }
                }

                // Prepare data for update
                $data = [
                    'name' => $name,
                    'address' => $address,
                    'map_url' => $map_url,
                    'sports' => $sports,
                    'images' => json_encode($existingImages),
                ];

                // Update record
                if ($model->update($id, $data)) {
                    return redirect()->to('/multicenter')->with('success', 'Multi-center updated successfully!');
                } else {
                    return redirect()->back()->with('error', 'Failed to update multi-center.');
                }
            }




                public function delete_multicenter($id)
                    {
                        $model = new \App\Models\CenterModel();
                        $model->delete($id);

                        return redirect()->to('/multicenter')->with('success', 'Slide deleted successfully!');
                    }





        // public function studentparents()
        // {
        //     return view('cms/studentparents');
        // }


        public function studentparents()
            {
                $model = new \App\Models\StudentParentFeatureModel();

                $studentparents = $model->findAll();

                return view('cms/studentparents', ['studentparents' => $studentparents]);
            }



        
        public function add_studentparents()
        {
            return view('cms/add_studentparents');
        }


        public function save_studentparents()
        {
            $model = new \App\Models\StudentParentFeatureModel();

            $feature_text = $this->request->getPost('feature_text');

            if ($feature_text) {
                $model->save(['feature_text' => $feature_text]);
                return redirect()->back()->with('success', 'Feature added!');
            }

            return redirect()->back()->with('error', 'Please enter a feature.');
        }

       

        public function edit_studentparent($id)
        {
                $model = new \App\Models\StudentParentFeatureModel();

                $studentparent = $model->find($id);

                if (!$studentparent) {
                    return redirect()->back()->with('error', 'Feature not found.');
                }

                return view('cms/edit_studentparent', ['studentparent' => $studentparent]);
        }

        
                public function update_studentparents($id)
            {
                $model = new \App\Models\StudentParentFeatureModel();

                $studentparent = $model->find($id);

                if (!$studentparent) {
                    return redirect()->back()->with('error', 'Feature not found.');
                }

                $newText = $this->request->getPost('feature_text');

                $model->update($id, [
                    'feature_text' => $newText
                ]);

                return redirect()->to('/studentparents')->with('success', 'Feature updated successfully.');
            }


            // Delete slide
                public function delete_studentparent($id)
                {
                    $model = new \App\Models\StudentParentFeatureModel();
                    $model->delete($id);

                    return redirect()->to('/studentparents')->with('success', 'Slide deleted successfully!');
                }


                // sonu

                public function events()
                {
                    $model = new \App\Models\EventAnnouncementModel();
                    $events = $model->findAll();

                    return view('cms/events', ['events' => $events]);
                }

                public function add_event()
                {
                    return view('cms/add_event');
                }

               public function save_event()
                    {
                        $model = new \App\Models\EventAnnouncementModel();
                        $title = $this->request->getPost('title');
                        $description = $this->request->getPost('description');
                        $btn_title = $this->request->getPost('btn_title');
                        $btn_url = $this->request->getPost('btn_url');

                        if ($title && $description) {
                            $model->save([
                                'title' => $title,
                                'description' => $description,
                                'btn_title' => $btn_title,
                                'btn_url' => $btn_url   
                            ]);
                            return redirect()->back()->with('success', 'Event added!');
                        }

                        return redirect()->back()->with('error', 'Please enter all required fields.');
                    }


                public function edit_event($id)
                {
                    $model = new \App\Models\EventAnnouncementModel();
                    $event = $model->find($id);

                    if (!$event) {
                        return redirect()->back()->with('error', 'Event not found.');
                    }

                    return view('cms/edit_event', ['event' => $event]);
                }

               public function update_event($id)
                    {
                        $model = new \App\Models\EventAnnouncementModel();
                        $event = $model->find($id);

                        if (!$event) {
                            return redirect()->back()->with('error', 'Event not found.');
                        }

                        $title = $this->request->getPost('title');
                        $description = $this->request->getPost('description');
                        $btn_title = $this->request->getPost('btn_title');
                        $btn_url = $this->request->getPost('btn_url');

                        $model->update($id, [
                            'title' => $title,
                            'description' => $description,
                            'btn_title' => $btn_title,
                            'btn_url' => $btn_url
                        ]);

                        return redirect()->to('/events')->with('success', 'Event updated successfully.');
                    }


                public function delete_event($id)
                {
                    $model = new \App\Models\EventAnnouncementModel();
                    $model->delete($id);

                    return redirect()->to('/events')->with('success', 'Event deleted successfully!');
                }




                // Show all testimonials
            public function testimonials()
            {
                $model = new \App\Models\TestimonialModel();
                $testimonials = $model->findAll();

                return view('cms/testimonials', ['testimonials' => $testimonials]);
            }

            // Show add form
            public function add_testimonial()
            {
                return view('cms/add_testimonial');
            }

// Save new testimonial
            public function save_testimonial()
            {
                $model = new \App\Models\TestimonialModel();

                $name = $this->request->getPost('name');
                $role = $this->request->getPost('role');
                $message = $this->request->getPost('message');

                // Optional: handle image upload
                $imageFile = $this->request->getFile('image');
                $imageName = '';

                if ($imageFile && $imageFile->isValid()) {
                    $imageName = $imageFile->getRandomName();
                    $imageFile->move('uploads/testimonials', $imageName);
                }

                if ($name && $role && $message) {
                    $model->save([
                        'name' => $name,
                        'role' => $role,
                        'message' => $message,
                        'image' => $imageName
                    ]);

                    return redirect()->back()->with('success', 'Testimonial added!');
                }

                return redirect()->back()->with('error', 'Please fill all required fields.');
            }

            // Show edit form
            public function edit_testimonial($id)
            {
                $model = new \App\Models\TestimonialModel();
                $testimonial = $model->find($id);

                if (!$testimonial) {
                    return redirect()->back()->with('error', 'Testimonial not found.');
                }

                return view('cms/edit_testimonial', ['testimonial' => $testimonial]);
            }

            // Update testimonial
            public function update_testimonial($id)
            {
                $model = new \App\Models\TestimonialModel();
                $testimonial = $model->find($id);

                if (!$testimonial) {
                    return redirect()->back()->with('error', 'Testimonial not found.');
                }

                $name = $this->request->getPost('name');
                $role = $this->request->getPost('role');
                $message = $this->request->getPost('message');

                // Handle new image (optional)
                $imageFile = $this->request->getFile('image');
                $imageName = $testimonial['image']; // keep old by default

                if ($imageFile && $imageFile->isValid()) {
                    $imageName = $imageFile->getRandomName();
                    $imageFile->move('uploads/testimonials', $imageName);
                }

                $model->update($id, [
                    'name' => $name,
                    'role' => $role,
                    'message' => $message,
                    'image' => $imageName
                ]);

                return redirect()->to('/testimonials')->with('success', 'Testimonial updated successfully.');
            }

            // Delete testimonial
            public function delete_testimonial($id)
            {
                $model = new \App\Models\TestimonialModel();
                $model->delete($id);

                return redirect()->to('/testimonials')->with('success', 'Testimonial deleted successfully.');
            }


            
        // public function hero()
            // {
            //     return view('cms/hero');
            // }
         public function faq()
        {
            $faqModel = new FaqModel();
            $data['faqs'] = $faqModel->findAll();  

            return view('cms/faq', $data);         
        }
            public function add_faq()
        {
            return view('cms/add_faq');
        }

          // Save new FAQ
            public function save_faq()
            {
                $faqModel = new FaqModel();

                $data = [
                    'question' => $this->request->getPost('question'),
                    'answer'   => $this->request->getPost('answer'),
                    'status'   => $this->request->getPost('status') ? 1 : 0,
                ];

                $faqModel->save($data);

                return redirect()->to('/faq')->with('success', 'FAQ added successfully');
            }


            public function edit_faq($id)
            {
                $faqModel = new \App\Models\FaqModel();
                $data['faq'] = $faqModel->find($id);
                return view('cms/edit_faq', $data);
            }


           // Update FAQ
            public function update_faq($id)
            {
                $faqModel = new FaqModel();

                $data = [
                    'question' => $this->request->getPost('question'),
                    'answer'   => $this->request->getPost('answer'),
                    'status'   => $this->request->getPost('status') ? 1 : 0,
                ];

                $faqModel->update($id, $data);

                return redirect()->to('/faq')->with('success', 'FAQ updated successfully');
            }


                // Delete FAQ
            public function delete_faq($id)
            {
                $faqModel = new FaqModel();
                $faqModel->delete($id);

                return redirect()->to('/faq')->with('success', 'FAQ deleted successfully');
            }


    
}