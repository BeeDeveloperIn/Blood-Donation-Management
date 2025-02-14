@include("header")
<?php 
use App\Models\User;

?>
<section id="page-heading"
	class="search-page-heading overlay overlay-primary has-bg-img position-relative clearfix">
	<div class="overlay-content align-items-end text-white">
		<img class="bg-img"
			src="{{ asset('public/images/search-banner.png') }}" alt=""
			width="100%">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="page-title position-absolute start-50 translate-middle">
						<h1 class="text-white fw-bold">Search Blood Donation</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="search-section">
	<div class="container">
		<form id="search-form" class="p-5 bg-white shadow" method="get">
			<div class="row g-4 align-items-center">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="input-group">
						<select name="donor_type" class="form-select"
							aria-label="Default select example">
							<option value="">Choose Your Need</option>
							<option value="1"{{ ('1' ==app('request')->input('donor_type')) ?
								'selected' : '' }}>Plasma</option>
							<option value="2"{{ ('2' ==app('request')->input('donor_type')) ?
								'selected' : '' }}>Blood</option>
							<option value="3"{{ ('3' ==app('request')->input('donor_type')) ?
								'selected' : '' }}>Platelets</option>
						</select>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-12">
					<div class="input-group">
						<select name="blood_group" class="form-select"
							aria-label="Default select example">
							<option value="">Blood Group</option>
							<option value="O+" {{ ('O+' ==app('request')->input('blood_group'))
								? 'selected' : '' }} >O+</option>
							<option value="O-" {{ ('O-' ==app('request')->input('blood_group'))
								? 'selected' : '' }} >O-</option>
							<option value="A+" {{ ('A+' ==app('request')->input('blood_group'))
								? 'selected' : '' }} >A+</option>
							<option value="A-" {{ ('A-' ==app('request')->input('blood_group'))
								? 'selected' : '' }} >A-</option>
							<option value="B+" {{ ('B+' ==app('request')->input('blood_group'))
								? 'selected' : '' }} >B+</option>
							<option value="B-" {{ ('B-' ==app('request')->input('blood_group'))
								? 'selected' : '' }} >B-</option>
							<option value="AB+" {{ ('AB+' ==app('request')->input('blood_group'))
								? 'selected' : '' }} >AB+</option>
							<option value="AB-" {{ ('AB-' ==app('request')->input('blood_group'))
								? 'selected' : '' }} >AB-</option>
						</select>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-12">
					<div class="input-group">
						<input type="text" class="form-control" name="address"
							placeholder="Address"
							value="{{ app('request')->input('address') }}" />
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-12">
					<div class="input-group">
						<input type="text" class="form-control" name="zipcode"
							placeholder="Zipcode"
							value="{{ app('request')->input('zipcode') }}" />
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-6">
				<button type="submit" class="btn  btn-lg mt-md-0 mt-sm-3 text-white float-start" style="background-color: #39afc7;" value="Submit">Submit</button>
				<a  class="btn  btn-lg mt-md-0 mt-sm-3 text-white float-end" style="background-color: #39afc7;"
				 href="<?= url('search'); ?>">Reset</a>
				</div>

			</div>
		</form>
	</div>
</section>
<!-- donation list -->
<section id="donation-list" class="mb-5">
	<div class="container">
		<div class="row g-5 align-items-center d-lg-flex d-md-block pb-5">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="table-responsive border bg-white shadow">
					<table class="table table-hover mb-0">
						<thead class="table-light">
							<tr>	
								<th class="p-3 " scope="col">Name</th>
								<th class="p-3 " scope="col">Email</th>
								<th class="p-3 " scope="col">Blood Group</th>
								<th class="p-3 " scope="col">Donor</th>
								<th class="p-3 " scope="col">Address</th>
								<th class="p-3 " scope="col">Zipcode</th>
								<th class="p-3 " scope="col">Contact</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $user)
							<tr class="align-middle">
								<td class="p-3">{{ $user->name}}</td>
								<td class="p-3">{{'*****'.substr($user->email, 5);}}</td>
								<td class="p-3">{{ $user->blood_group}}</td>
								<td class="p-3">{{  User::getDonorOptions($user->donor_type)}}</td>

								<td class="p-3">{{ $user->address}}</td>
								<td class="p-3">{{ $user->zipcode}}</td>
								<td class="p-3"><a href="#" onclick="showDetails({{$user->id }})"
									data-bs-toggle="modal" data-bs-target="#deleteModal"> {{
										'*****'.substr($user->contact_no, 5);}}</a></td>
							</tr>
							@endforeach
                          <caption id="data-not-found"> 
						  <div class="mt-8">  {{ $users->links('pagination') }}</div> 
						                         </caption>  
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
function showDetails(id) {
    $.ajax({
        type: 'GET',
        enctype: 'multipart/form-data',
        url: "{{ url('getUserById') }}" + '/' + id,
        contentType: false,
        processData: false,
        success: function(data) {
            $('#contact').attr("src", data.imageFile);
        }
    });
}
</script>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
	aria-labelledby="deleteModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"></div>
			<div class="modal-body">
				<h4>Thanks!! for contacting will get back to you shortly</h4>
				
				  <img id="contact" src="" width="50%" height="auto" />
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="button"
					data-bs-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
@include("footer")
