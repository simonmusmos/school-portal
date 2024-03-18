@extends('layouts.masters.home_test')

@section('content')
<div class="projects-section">
	<div class="projects-section-header">
		<p>Teachers</p>
		<!-- <p class="time">December, 12</p> -->
	</div>
	<div class="projects-section-line">
		<div class="projects-status">
			<div class="item-status">
				<span class="status-number" id="active_count"></span>
				<span class="status-type">Active</span>
			</div>
			<div class="item-status">
				<span class="status-number" id="inactive_count"></span>
				<span class="status-type">Inactive</span>
			</div>
			<div class="item-status">
				<span class="status-number" id="total_count"></span>
				<span class="status-type">Total Teachers</span>
			</div>
		</div>
		<div class="view-actions">
			<!-- <button class="view-btn list-view" title="List View">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
					<line x1="8" y1="6" x2="21" y2="6"></line>
					<line x1="8" y1="12" x2="21" y2="12"></line>
					<line x1="8" y1="18" x2="21" y2="18"></line>
					<line x1="3" y1="6" x2="3.01" y2="6"></line>
					<line x1="3" y1="12" x2="3.01" y2="12"></line>
					<line x1="3" y1="18" x2="3.01" y2="18"></line>
				</svg>
			</button> -->
			<button class="view-btn grid-view active" title="Add Teacher" id="add-teacher">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
			</button>
			<button class="disabled bulk-delete-btn grid-view active" title="Delete Teachers" id="bulk-delete-btn" disabled>
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><line x1="10" y1="11" x2="10" y2="17"/><line x1="14" y1="11" x2="14" y2="17"/></svg>
			</button>
		</div>
	</div>
	<div class="project-boxes jsGridView">
		<div class="container">
			<div class="row justify-content-center">
			<div class="col-12">
				<div class="table-responsive bg-white">
				<table class="table mb-0" id="teachersTable">
					<thead>
					<tr>
						<th scope="col"><input class="form-check-input" type="checkbox" id="check_all"></th>
						<th scope="col">NAME</th>
						<!-- <th scope="col">SECTIONS</th> -->
						<!-- <th scope="col">STUDENTS</th> -->
						<th scope="col">STATUS</th>
						<th scope="col">ACTION</th>
					</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<div class="messages-section">
	<button class="messages-close">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
			<circle cx="12" cy="12" r="10"></circle>
			<line x1="15" y1="9" x2="9" y2="15"></line>
			<line x1="9" y1="9" x2="15" y2="15"></line>
		</svg>
	</button>
	<div class="projects-section-header">
		<p>Client Messages</p>
	</div>
	<div class="messages">
		<!-- <div class="message-box">
			<img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;q=80" alt="profile image">
			<div class="message-content">
				<div class="message-header">
					<div class="name">Stephanie</div>
					<div class="star-checkbox">
						<input type="checkbox" id="star-1">
						<label for="star-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
								<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
							</svg>
						</label>
					</div>
				</div>
				<p class="message-line"> I got your first assignment. It was quite good. 🥳 We can continue with the next assignment. </p>
				<p class="message-line time"> Dec, 12 </p>
			</div>
		</div>
		<div class="message-box">
			<img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;q=80" alt="profile image">
			<div class="message-content">
				<div class="message-header">
					<div class="name">Mark</div>
					<div class="star-checkbox">
						<input type="checkbox" id="star-2">
						<label for="star-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
								<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
							</svg>
						</label>
					</div>
				</div>
				<p class="message-line"> Hey, can tell me about progress of project? I'm waiting for your response. </p>
				<p class="message-line time"> Dec, 12 </p>
			</div>
		</div>
		<div class="message-box">
			<img src="https://images.unsplash.com/photo-1543965170-4c01a586684e?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDZ8fG1hbnxlbnwwfDB8MHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=900&amp;q=60" alt="profile image">
			<div class="message-content">
				<div class="message-header">
					<div class="name">David</div>
					<div class="star-checkbox">
						<input type="checkbox" id="star-3">
						<label for="star-3">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
								<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
							</svg>
						</label>
					</div>
				</div>
				<p class="message-line"> Awesome! 🤩 I like it. We can schedule a meeting for the next one. </p>
				<p class="message-line time"> Dec, 12 </p>
			</div>
		</div>
		<div class="message-box">
			<img src="https://images.unsplash.com/photo-1533993192821-2cce3a8267d1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTl8fHdvbWFuJTIwbW9kZXJufGVufDB8fDB8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=900&amp;q=60" alt="profile image">
			<div class="message-content">
				<div class="message-header">
					<div class="name">Jessica</div>
					<div class="star-checkbox">
						<input type="checkbox" id="star-4">
						<label for="star-4">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
								<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
							</svg>
						</label>
					</div>
				</div>
				<p class="message-line"> I am really impressed! Can't wait to see the final result. </p>
				<p class="message-line time"> Dec, 11 </p>
			</div>
		</div> -->
	</div>
</div>
@include('teachers.partials.modal') 
@endsection
@push('scripts')
	<script>
		var storeURL = "{{ route('teachers.store') }}";
		var getDataURL = "{{ route('teachers.get') }}";
		var deleteURL = "{{ route('levels.destroy') }}";
		var getCountDataURL = "{{ route('teachers.getCount') }}";
		$(document).ready(function () {
			refreshCountData();
			refreshData();
		});
	 	$("form").on("submit", function (e) {
			e.preventDefault();
			var id = $("form input[name='id']").val();
			var request = {};
			var method = "post";
			var url = "";
			if (id == "") {
				url = storeURL;
				request = {
					first_name: $("form input[name='first_name']").val(),
					last_name: $("form input[name='last_name']").val(),
					email: $("form input[name='email']").val(),
				};
			} else {
				url = storeURL + '/' + id;
				var active = 0;
				if ($("form input[name='active']").is(":checked")) {
					active = 1;
				}
				request = {
					first_name: $("form input[name='first_name']").val(),
					last_name: $("form input[name='last_name']").val(),
					email: $("form input[name='email']").val(),
				};
			}
			
			var data = ajaxRequest(url, method, request, 'formModal');
		});

		$(document).on("click", ".edit-btn", function () {
			url = storeURL + '/' + $(this).attr("data-value");
			request = {};
			method = "get";

			ajaxRequest(url, method, request, 'formDetail');
		});

		$(document).on("click", ".delete-btn", function () {
			var html = '<li class="list-group-item">' + $(this).parents("tr").find(".object-name").html() + '<input type="hidden" name="delete_ids[]" value="' + $(this).attr("data-value") + '"></li>';
			$("#deleteConfirmationModal").find(".list-group").html(html);
			showModal('deleteConfirmationModal');
		});

		$(document).on("click", "input[name='row_check[]']", function () {
			$("#check_all").prop("checked", false);
			if ($("input[name='row_check[]']:checked").length > 0) {
				$("#bulk-delete-btn").removeClass("disabled");
				$("#bulk-delete-btn").removeAttr("disabled");
			} else {
				$("#bulk-delete-btn").addClass("disabled");
				$("#bulk-delete-btn").attr("disabled", true);
			}
		});

		$("#bulk-delete-btn").on("click", function () {
			var html = "";
			$("input[name='row_check[]']:checked").each(function () {
				html += '<li class="list-group-item">' + $(this).parents("tr").find(".object-name").html() + '<input type="hidden" name="delete_ids[]" value="' + $(this).val() + '"></li>';
			});
			$("#deleteConfirmationModal").find(".list-group").html(html);
			// var html = '<li class="list-group-item">' + $(this).parents("tr").find(".object-name").html() + '<input type="hidden" name="delete_ids[]" value="' + $(this).attr("data-value") + '"></li>';
			// $("#deleteConfirmationModal").find(".list-group").html(html);
			showModal('deleteConfirmationModal');
		});

		$("#check_all").on("click", function () {
			if ($(this).is(":checked")) {
				$("input[name='row_check[]']").prop("checked", true);
			} else {
				$("input[name='row_check[]']").prop("checked", false);
			}

			if ($("input[name='row_check[]']:checked").length > 0) {
				$("#bulk-delete-btn").removeClass("disabled");
				$("#bulk-delete-btn").removeAttr("disabled");
			} else {
				$("#bulk-delete-btn").addClass("disabled");
				$("#bulk-delete-btn").attr("disabled", true);
			}
		});
		$("#add-teacher").on("click", function () {
			clearModal("formModal");
			showModal('formModal');
			
			$("#formModal").find(".modal-title").html("Add Teacher");
			$("#formModal").find("#active_div").addClass("d-none");
			$("#formModal").find("button[type='submit']").html("Add Teacher");
		});

		$("#deleteConfirmationModal").find(".confirm").on("click", function () {
			var delete_ids = [];
			$("input[name='delete_ids[]']").each(function() {
				delete_ids.push($(this).val());
			});
			
			url = deleteURL;
			request = {
				delete_ids: delete_ids
			};
			method = "post";

			ajaxRequest(url, method, request, 'delete');
		});

		function ajaxRequest (url, method, request, type) {
			$.ajax({
				url: url,
				method: method,
        		async: false,
				data: request,
				success: function(response) {
					if (type == 'formModal') {
						if (response.success) {
							let configs = {
								title: "Success",
								message: response.message,
								status: TOAST_STATUS.SUCCESS,
								timeout: 5000,
							};
							Toast.setTheme(TOAST_THEME.DARK);
							Toast.create(configs);
							clearModal("formModal");
							refreshData();
							refreshCountData();
						} else {
							$.each(response.data, function (index, value) {
								let configs = {
									title: "Error",
									message: value,
									status: TOAST_STATUS.DANGER,
									timeout: 5000,
								};
								Toast.setTheme(TOAST_THEME.DARK);
								Toast.create(configs);
							});
						}
					} else if (type == 'table') {
						populateView(response, 'table');
					} else if (type == 'count') {
						populateView(response, 'count');
					} else if (type == 'formDetail') {
						console.log(response);
						$("form input[name='id']").val(response.teacher.id);
						$("form input[name='first_name']").val(response.teacher.first_name);
						$("form input[name='last_name']").val(response.teacher.last_name);
						$("form input[name='email']").val(response.teacher.email);
						$("form input[name='active']").prop("checked", false);
						if (response.teacher.is_active == "1") {
							$("form input[name='active']").prop("checked", true);
						}
						showModal('formModal');
						$("#formModal").find("#active_div").removeClass("d-none");
						$("#formModal").find(".modal-title").html("Edit Teacher");
						$("#formModal").find("button[type='submit']").html("Save Changes");
					} else if (type == 'delete') {
						console.log(response);
						if (response.success) {
							let configs = {
								title: "Success",
								message: response.message,
								status: TOAST_STATUS.SUCCESS,
								timeout: 5000,
							};
							Toast.setTheme(TOAST_THEME.DARK);
							Toast.create(configs);
							$("#deleteConfirmationModal").find(".list-group").html();
							$("#deleteConfirmationModal").modal('hide');
							$("#check_all").prop("checked", false);
							refreshData();
							refreshCountData();
						} else {
							$.each(response.data, function (index, value) {
								let configs = {
									title: "Error",
									message: value,
									status: TOAST_STATUS.DANGER,
									timeout: 5000,
								};
								Toast.setTheme(TOAST_THEME.DARK);
								Toast.create(configs);
							});
						}
					}
					return response;
				},
				error: function(xhr, status, error) {
					let configs = {
						title: "Error",
						message: "Please report to administrator",
						status: TOAST_STATUS.DANGER,
						timeout: 5000,
					};
					Toast.setTheme(TOAST_THEME.DARK);
					Toast.create(configs);
				}
			});
		}

		function clearModal (id) {
			$("#" + id).find(".close-btn").click();
			$("#" + id)
				.find("input,textarea,select")
					.val('')
					.end()
				.find("input[type=checkbox], input[type=radio]")
					.prop("checked", "")
					.end();
		}

		function showModal (id) {
			var modal = new bootstrap.Modal(document.getElementById(id), {});
			modal.show();
		}

		function refreshData () {
			url = getDataURL;
			request = {};
			method = "get";

			var data = ajaxRequest(url, method, request, 'table');
		}

		function refreshCountData () {
			url = getCountDataURL;
			request = {};
			method = "get";

			var data = ajaxRequest(url, method, request, 'count');
		}

		function populateView (data, type) {
			
			if (type == 'table') {
				$("#teachersTable tbody").html("");

				var rows = "";

				$.each(data.teachers, function (index, value) {
					var status = "Active";
					if (value.is_active == '0') {
						status = "Inactive"
					}
					rows += '<tr>'+
							'	<td><input class="form-check-input" type="checkbox" value="' + value.id + '" name="row_check[]"></td>'+
							'	<th class="object-name" scope="row" style="color: #666666;">' + value.first_name + ' ' + value.last_name + '</th>'+
							'	<td class="text-status-' + status.toLowerCase() + '">' + status + '</td>'+
							'	<td>'+
							'		<div class="btn-group">'+
							'			<button type="button" class="edit-btn" data-value="' + value.id + '" title="Edit Teacher">'+
							'				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>'+
							'			</button>'+
							'			<button type="button" class="delete-btn" data-value="' + value.id + '" title="Delete Teacher">'+
							'				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><line x1="10" y1="11" x2="10" y2="17"/><line x1="14" y1="11" x2="14" y2="17"/></svg>'+
							'			</button>'+
							'		</div>'+
							'	</td>'+
							'</tr>';
				});

				if (rows == "") {
					rows += '<tr>'+
							'	<td colspan="6" class="text-center">No available data yet.</td>'+
							'</tr>';
				}
				$("#teachersTable tbody").html(rows);
			} else if (type == 'count') {
				$("#active_count").html(data.counts.active_count ?? 0);
				$("#inactive_count").html(data.counts.inactive_count ?? 0);
				$("#total_count").html(parseInt(data.counts.active_count ?? 0) + parseInt(data.counts.inactive_count ?? 0));
			}
		}
	</script>
@endpush