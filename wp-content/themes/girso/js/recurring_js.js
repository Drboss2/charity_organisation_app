
function add_evt_location(default_json)
{
	if(default_json == undefined || default_json == null)
	{
		default_json = '';	
	}
	var evt_id = '';
	var city = '';
	var date = '';
	var time = '';
	var location = '';
	var map = '';
	var fee = '';
	var fee_includes = '';
	var age = '';
	var parking = '';
	var parking_info = '';
	var display_order = '';
	var date_formated = '';
	var buy_btn_text = '';
	var available_tickets = '';
	var booking_ends_at = '';	
	
	if(default_json != '')
	{
		//console.log(default_json);
		var json_obj = default_json; //JSON.parse(default_json);
		evt_id = json_obj.evt_id;
		city = json_obj.city;
		date = json_obj.date;
		time = json_obj.time;
		location = json_obj.location;
		map = json_obj.map;
		fee = json_obj.fee;
		fee_includes = json_obj.fee_includes;
		age = json_obj.age;
		parking = json_obj.parking;
		parking_info = json_obj.parking_info;
		display_order = json_obj.display_order;
		date_formated = json_obj.date_formated;
		buy_btn_text = json_obj.buy_btn_text;
		available_tickets = json_obj.available_tickets;
		booking_ends_at = json_obj.booking_ends_at;		
	}
	var existing_event_locations = $(".recurring_main_container .recurring_box_cntr").length;
	if(display_order == '')
	{
		display_order	= existing_event_locations+1;
	}
	var location_html = '<div class="recurring_box_cntr">';
			location_html += '<input type="hidden" name="recurring_info[detail_id][]" value="'+evt_id+'">';
			
			location_html += '<div class="recurring_hd">Event #'+(existing_event_locations+1)+'</div>';
		
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">City</div>';
				location_html += '<div class="recurring_row_input"><input type="text" name="recurring_info[city][]" value="'+city+'"></div>';
			location_html += '</div>';
			

			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">Date</div>';
				location_html += '<div class="recurring_row_input "><input type="text" class="dateDisplay" name="recurring_info[datedisplay][]" value="'+date_formated+'"><input type="hidden" class="date" name="recurring_info[date][]" value="'+date+'"></div>';
			location_html += '</div>';
			
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">Time</div>';
				location_html += '<div class="recurring_row_input"><input type="text" name="recurring_info[time][]" value="'+time+'"></div>';
			location_html += '</div>';
			
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">Booking ends at</div>';
				location_html += '<div class="recurring_row_input"><input type="text" class="booking_ends_at" name="recurring_info[booking_ends_at][]" value="'+booking_ends_at+'"></div>';
			location_html += '</div>';
			
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">Location</div>';
				location_html += '<div class="recurring_row_input"><textarea name="recurring_info[location][]">'+location+'</textarea></div>';
			location_html += '</div>';
			location_html += '<div class="recurring_row">';
			location_html += '<div class="recurring_row_lbl">Map Link</div>';
				location_html += '<div class="recurring_row_input"><input type="text" name="recurring_info[map][]" value="'+map+'"></div>';
			location_html += '</div>';
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">Fee</div>';
				location_html += '<div class="recurring_row_input"><input type="text" name="recurring_info[fee][]" value="'+fee+'"></div>';
			location_html += '</div>';
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">Fee includes</div>';
				location_html += '<div class="recurring_row_input"><input type="text" name="recurring_info[fee_includes][]" value="'+fee_includes+'"></div>';
			location_html += '</div>';
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">Age suitability</div>';
				location_html += '<div class="recurring_row_input"><input type="text" name="recurring_info[age][]" value="'+age+'"></div>';
			location_html += '</div>';
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">Parking</div>';
				location_html += '<div class="recurring_row_input"><input type="text" name="recurring_info[parking][]" value="'+parking+'"></div>';
			location_html += '</div>';
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">Parking info</div>';
				location_html += '<div class="recurring_row_input"><input type="text" name="recurring_info[parking_info][]" value="'+parking_info+'"></div>';
			location_html += '</div>';
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">Buy button text</div>';
				location_html += '<div class="recurring_row_input"><input type="text" name="recurring_info[buy_btn_text][]" value="'+buy_btn_text+'"></div>';
			location_html += '</div>';
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">Total avaiable tickets</div>';
				location_html += '<div class="recurring_row_input"><input type="text" name="recurring_info[available_tickets][]" value="'+available_tickets+'"></div>';
			location_html += '</div>';
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">Front display order</div>';
				location_html += '<div class="recurring_row_input"><input type="text" name="recurring_info[display_order][]" value="'+display_order+'"></div>';
			location_html += '</div>';
			location_html += '<div class="recurring_row">';
				location_html += '<div class="recurring_row_lbl">&nbsp;</div>';
				location_html += '<div class="recurring_row_input"><input type="button" name="deleteevt" value="Delete" class="button deletebtn" onclick="remove_recur_event(this)"></div>';
			location_html += '</div>';
		location_html += '</div>';
		
	
	$(location_html).insertBefore($(".recurring_main_container .add_btn_cntr"));
	//Friday 19th April 2019
	$(".dateDisplay",$(".recurring_main_container .recurring_box_cntr").last()).datepicker({
		changeMonth: true,
      	changeYear: true,
		dateFormat: 'DD, d MM yy',
		altField: $(".date",$(".recurring_main_container .recurring_box_cntr").last()),
      	altFormat: "yy-mm-dd"
	});
	
	$(".booking_ends_at",$(".recurring_main_container .recurring_box_cntr").last() ).datetimepicker({
							dateFormat: 'yy-mm-dd',
							timeFormat: 'HH:mm:ss',
							step : 5,
					  }).attr('readonly', 'readonly');
	
}
jQuery( document ).ready(function() {
	
	jQuery("#add_evt_location").on("click",function(){
		add_evt_location();
	});
	
});
function remove_recur_event(btn)
{
	var evt_id = $("input[type=hidden]",$(btn).parent().parent().parent()).val();
	if(evt_id != '')
	{
		$.post(ajaxurl ,                        // or ajaxurl
			   {
				   action: 'recurring_event_delete',               // POST data, action
				   evt_id: evt_id // POST data, 
			   }, function (data) {
					// handle response data
					if (data === 'success') {
						// perform our success logic
					} else if (data === 'failure') {
						// perform our failure logic
					} else {
						// do nothing
					}
				}
		);	
	}
	$(btn).parent().parent().parent().remove();
	
	$(".recurring_main_container .recurring_box_cntr").each(function(key,val){
		$(".recurring_hd",$(val)).html("Event #"+(key+1));
	});
	
}