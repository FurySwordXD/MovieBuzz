function onSeatSelected(element)
{
	if($(element).hasClass("selected"))
	{
		$(element).attr("src", "assets/Icons/seat.png");
		$(element).removeClass("selected");
	}
	else if(!$(element).hasClass("booked"))
	{
		$(element).attr("src", "assets/Icons/seat-selected.png");
		$(element).addClass("selected");
		addSelectedSeat(element);
	}
}

var selectedSeats = [];
function addSelectedSeat(element)
{
	var text = "";
	selectedSeats.sort();
	selectedSeats.push(element);
	for (var i = selectedSeats.length - 1; i >= 0; i--) {
		text += $(selectedSeats[i]).attr('id') + " ";
	}
	$("#SelectionDetails").text(text);
}
