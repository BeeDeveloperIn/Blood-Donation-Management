@include("header")
<?php 
$user =auth()->user();

?>
<section id="page-heading" class="overlay overlay-primary has-bg-img position-relative clearfix">
<div class="overlay-content align-items-end text-white">
    <img class="bg-img" src="{{ asset('public/images/blog-bg.jpg') }}" alt="" width="100%">
     <div
        class="container"> <div class="row">
    <div class="col-12">
    <div class="page-title position-absolute start-50 translate-middle">
    <h1 class="text-white">{{ auth()->user()->name }}</h1>
    </div>
    </div>
</div>
</div> </div> </section>
<main id="user-profile">

<section class="user-profile-section pb-5 px-3">
            <div class="container emp-profile shadow mt-0">
                <div class="row g-5">
                    <div class="col-md-3">
                    <form method="POST" action="{{route('profile.updateImage', ['user' => $user->id])}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                        <div class="image-side-section">
                          <div class="profile-img">
                              <?php 
                              $filePath = asset('public/images/avtar-1.jpg');
                              if(!empty($user->image_file)) {
                               $filePath =  asset('storage/app/public/' . $user->image_file);   
                              }
                              ?>
                              <img class="avtar-profile border p-1" src="{{ $filePath }}" alt=""/>
                             
                              <div class="file btn btn-lg">Change Photo <input id="image_file" type="file" name="image_file"/> </div>
                          </div>
                        </div>
</form>
                    </div>
                    <div class="col-md-9">
                      <div class="profile-head mb-5">
                        <h2>{{ auth()->user()->name }}</h2>
                     
                        <ul class="list-group list-group-flush list-unstyled small pt-4">
                          <li class="list-group-item p-0 border-0 d-flex bg-transparent text-dark mb-2"><span class="float-start w-auto pe-1"><i class="bi bi-geo-alt-fill"></i></span><span class="float-end">{{ auth()->user()->address }}</span></li>
                          <li class="list-group-item p-0 border-0 d-flex bg-transparent text-dark mb-2"><a class="text-dark link" href="#"><span class="float-start w-auto pe-1"><i class="bi bi-telephone-fill"></i></span> <span class="float-end">{{ auth()->user()->contact_no }}</span></a></li>
                          <li class="list-group-item p-0 border-0 d-flex bg-transparent text-dark mb-2"><a class="text-dark link" href="#"><span class="float-start w-auto pe-1"><i class="bi bi-envelope-fill"></i></span> <span class="float-end">{{ auth()->user()->email }}</span></a></li>
                      </ul>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="profile-head d-lg-flex d-md-block justify-content-between d-sm-block w-100">
                          <!-- <ul class="list-group list-group-horizontal order-lg-2 order-md-1 order-sm-1">
                              <li class="list-group-item p-0 overflow-hidden border-0"> <a href="#" class="nav-link text-white"><i class="bi bi-gear"></i></a></li>
                              <li class="list-group-item p-0 overflow-hidden border-0"> <a href="#" class="nav-link text-white"><i class="bi bi-power"></i></a></li>
                          </ul> -->
                          <ul class="float-lg-start float-md-none nav flex-lg-column nav-tabs order-lg-1 order-md-2 order-sm-2 border-0 w-100 text-center" role="tablist">
                              <li class="nav-item-tab" role="presentation"> <a href="#list1" id="list1-tab" data-bs-toggle="tab" data-bs-target="#list1" role="tab" aria-controls="list1" aria-selected="true" class="rounded-0 nav-link active">About me</a> </li>
                              <li class="nav-item-tab" role="presentation"> <a href="#list2" id="list2-tab" data-bs-toggle="tab" data-bs-target="#list2" role="tab" aria-controls="list2" aria-selected="false" class="rounded-0 nav-link">Update Profile</a> </li>
                              <li class="nav-item-tab" role="presentation"> <a href="#list3" id="list3-tab" data-bs-toggle="tab" data-bs-target="#list3" role="tab" aria-controls="list3" aria-selected="false" class="rounded-0 nav-link">Change Password</a> </li>
                              <li class="nav-item-tab" role="presentation"> <a href="{{ route('profile.logout') }}" id="list4-tab" aria-controls="list3" aria-selected="false" class="rounded-0 nav-link">Logout</a> </li>
                              
                            </ul>
                      </div>
                    </div>
                    <div class="col-md-9">
                         {{-- Alert Messages --}}
        @include('common.alert')
                        <div class="tab-content d-block">
                            <div id="list1" role="tabpanel" aria-labelledby="list1-tab" class="tab-pane fade show active">
                                <div class="info profile-tab">
                                  <h4 class="mb-5 fw-bold">About me</h4>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-center align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">User ID</div>
                                          </div>
                                          <span>{{ $user->id }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-center align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Name</div>
                                          </div>
                                          <span>{{ $user->name }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-center align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Email ID</div>
                                          </div>
                                          <span>{{ $user->email }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-center align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Last Blood Donate</div>
                                          </div>
                                          <span>{{ $user->last_donate_blood }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-center align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Phone</div>
                                          </div>
                                          <span>{{ $user->contact_no }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-center align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Address</div>
                                          </div>
                                          <span>{{ $user->address }}</span>
                                        </li>
                                      </ul>
                                </div>
                            </div>
                        <div id="list2" role="tabpanel" aria-labelledby="list2-tab" class="tab-pane fade">
                            <div class="info profile-tab">
                              <div class="bg-secondary-soft pb-5 rounded">
                              <form method="POST" action="{{route('admin.users.update', ['user' => $user->id])}}">
            @csrf
            @method('PUT')
                              <div class="row box8">
                                <h4 class="mb-5 fw-bold">Update Profile</h4>
                                  <div class="col-sm-6 form-group mb-3">
                                    <label class="form-label" for="name-f">Full Name</label>
                                    <input 
                            type="text" 
                            class="form-control form-control-user @error('name') is-invalid @enderror" 
                            id="exampleName"
                            placeholder="Enter full Name" 
                            name="name" 
                            value="{{ old('name') ?  old('name') : $user->name}}">

                        @error('first_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                                  </div>
                                  <div class="col-sm-6 form-group mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input 
                            type="email" 
                            class="form-control form-control-user @error('email') is-invalid @enderror" 
                            id="exampleEmail"
                            placeholder="Email" 
                            name="email" 
                            value="{{ old('email') ? old('email') : $user->email }}">

                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                                  </div>
                                 
                                  <div class="col-sm-6 form-group mb-3">
                                    <label class="form-label" for="tel">Contact No.</label>
                                    <input 
                            type="text" 
                            class="form-control form-control-user @error('contact_no') is-invalid @enderror" 
                            id="exampleMobile"
                            placeholder="Contact Number" 
                            name="contact_no" 
                            value="{{ old('contact_no') ? old('contact_no') : $user->contact_no }}">

                        @error('contact_no')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                                  </div>
                                  <div class="col-sm-6 form-group mb-3">
                                    <label class="form-label" for="age">Address</label>
                                    <input 
                            type="text" 
                            class="form-control form-control-user @error('address') is-invalid @enderror" 
                            id="exampleMobile"
                            placeholder="Enter Address" 
                            name="address" 
                            value="{{ old('address') ? old('address') : $user->address }}">

                        @error('address')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                                  </div>
                                  <div class="col-sm-6 form-group mb-3">
                                    <label class="form-label" for="State">ZipCode</label>
                                    <input 
                            type="text" 
                            class="form-control form-control-user @error('zipcode') is-invalid @enderror" 
                            id="exampleMobile"
                            placeholder="Enter ZipCode" 
                            name="zipcode" 
                            value="{{ old('zipcode') ? old('zipcode') : $user->zipcode }}">

                        @error('zipcode')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                                  </div>
                                  <div class="col-sm-6 form-group mb-3">
                                      <label for="address" class="form-label">Last Donate Blood</label>
                                      <input 
                            type="date" 
                            class="form-control form-control-user @error('last_donate_blood') is-invalid @enderror" 
                            id="exampleMobile"
                            placeholder="Choose date" 
                            name="last_donate_blood" 
                            value="{{ old('last_donate_blood') ? old('last_donate_blood') : $user->last_donate_blood }}">

                        @error('last_donate_blood')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                                  </div>
                                  <div class="col-sm-6 form-group mb-3">
                                      <label for="address" class="form-label">Blood Group</label>
                        <select class="form-control form-control-user @error('blood_group') is-invalid @enderror" name="blood_group">
                                  <option value="O+"  {{ (($user->blood_group == "O+") ? 'selected' : '')}}>O+</option>
									<option value="O-" {{ (($user->blood_group == "O-") ? 'selected' : '')}}>O-</option>
									<option value="A+" {{ (($user->blood_group == "A+") ? 'selected' : '')}}>A+</option>
									<option value="A-" {{ (($user->blood_group == "A-") ? 'selected' : '')}}>A-</option>
									<option value="B+" {{ (($user->blood_group == "B+") ? 'selected' : '')}}>B+</option>
									<option value="B-" {{ (($user->blood_group == "B-") ? 'selected' : '')}}>B-</option>
									<option value="AB+" {{ (($user->blood_group == "AB+") ? 'selected' : '')}}>AB+</option>
									<option value="AB-" {{ (($user->blood_group == "AB-") ? 'selected' : '')}}>AB-</option>
                        </select>
                        @error('blood_group')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                                  </div>
                    <div class="col-sm-6 form-group mb-3">
                        <span style="color:red;">*</span>Donor Type</label>

                        <select class="form-control form-control-user @error('donor_type') is-invalid @enderror" name="donor_type">
                                    <option value="1"  {{ (($user->donor_type == 1) ? 'selected' : '')}}>Plasma</option>
									<option value="2"  {{ (($user->donor_type == 2) ? 'selected' : '')}}>Blood</option>
									<option value="3"  {{ (($user->donor_type == 3) ? 'selected' : '')}}>Platelets</option>
                        </select>
                        @error('donor_type')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                                  <div class="text-center mt-3">

                                    <input class="btn submit-btn text-white" type="submit" value="Update">
                                </div>
                              </div>
                            </form>
                            </div>
                          </div>
                          </div>
                        <div id="list3" role="tabpanel" aria-labelledby="list3-tab" class="tab-pane fade">
                            <div class="info profile-tab">
                              <div class="bg-secondary-soft pb-5 rounded">
                              <form action="{{ route('profile.change-password') }}" method="POST">
                        @csrf
                                <div class="row g-3">
                                    <h4 class="mb-4 fw-bold">Change Password</h4>
                                       <!-- Current Password -->
                                       <div class="col-md-6">
                                       <label class="labels">Current Password</label>
                                <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" placeholder="Current Password" required>
                                @error('current_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                      </div>
                                      <!-- New password -->
                                      <div class="col-md-6">
                                      <label class="labels">New Password</label>
                                <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" required placeholder="New Password">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                      </div>
                                      <!-- Confirm password -->
                                      <div class="col-md-6">
                                      <label class="labels">Confirm Password</label>
                                <input type="password" name="new_confirm_password" class="form-control @error('new_confirm_password') is-invalid @enderror" required placeholder="Confirm Password">
                                @error('new_confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                      </div>
                                      <div class="text-center mt-3">
                                        <input class="btn submit-btn text-white" type="submit" value="Update">
                                      </div>
                                    </div>
                                  </form>
                            </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>        
          </div>
        </section>
@include("footer")
<script>
$(document).ready(function(){
   $('#image_file').change('on',function(){
    this.form.submit();
    });
});
  </script>