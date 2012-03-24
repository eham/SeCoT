window.onload = function(){				
	function toBinary(number){
		var array = [];

		for(i = 5; i >= 0; i--){
			var p = Math.pow(2, i);
			var r = 0;

			if(number >= p){
				number = number - p;
				r = 1;
			}
			
			array.push(r);				
		}

		return array.reverse();
	}

	function update(context){
		now      = new Date();
		kickoff  = Date.parse("May 7, 2012 08:00:00");

		if(kickoff >= now){
			diff = kickoff - now;

			days  = Math.floor(diff/(1000*60*60*24));
			hours = Math.floor(diff/(1000*60*60));
			mins  = Math.floor(diff/(1000*60));
			secs  = Math.floor(diff/1000);

			binary = [];
			binary = binary.concat(toBinary(days), toBinary(hours - days  * 24), toBinary(mins  - hours * 60), toBinary(secs  - mins  * 60));

			var posx = -8;
			var posy = 25;

			var fill = ["#064972","#CAC714","#0e5b8c","#bf0000"];

			context.clearRect (0, 0, 260, 100);

			for(i = 0; i < 24; i++){

				if(i % 6 == 0){
					posx += 35;
					posy = 25;
				} else if(i % 3 == 0){
					posx += 25;
					posy = 25;
				}
			
				context.beginPath();
				context.arc(posx, posy, 8, 0, 2 * Math.PI, false);
				context.lineWidth = 1;
				context.fillStyle = fill[i/6];
				if(binary[i]){
					context.fill();
				}
				context.strokeStyle = "#dedede";
				context.stroke();

				posy += 25;
			}
		} else {
			var d = document.getElementById('d');
			var countdown = document.getElementById('countdown');
			d.removeChild(countdown);
		}
	}

	var drawingCanvas = document.getElementById('countdown');

	if(drawingCanvas.getContext) {
		var context = drawingCanvas.getContext('2d');

		update(context);
		setInterval(function(){ update(context); }, 1000 );
	}
}
