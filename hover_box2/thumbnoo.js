window.addEvent('domready', function() {
	var aThumbNoos = $$("img.thumbnoo");
	var oCurrentNoo = undefined;

	var fn = function(){
		if (oCurrentNoo){
			oCurrentNoo.remove();
			oCurrentNoo = undefined;
		}
	}

	var offset = function(el, sPlane){
		iOffset = 0;
		['margin-%s', 'padding-%s'].each(function(style){
			iOffset += el.getStyle(style.replace(/%s/, sPlane)).toInt();
		});
		return iOffset;
	}

	var coord = function (iWindowSize, iSmallCoord, iSmallSize, iBigSize){
		if(iBigSize > iWindowSize) {
			return (iWindowSize - iBigSize) / 2;
		} else if((iSmallCoord >= (iBigSize - iSmallSize) / 2) && ((iSmallCoord + iSmallSize + ((iBigSize - iSmallSize) / 2)) <= iWindowSize)) {
			return iSmallCoord - (iBigSize - iSmallSize) / 2;
		} else if((iSmallCoord >= (iBigSize - iSmallSize) / 2) && ((iSmallCoord + iSmallSize + ((iBigSize - iSmallSize) / 2)) >= iWindowSize)) {
			return iSmallCoord - (iBigSize - iSmallSize);
		} else if((iSmallCoord <= (iBigSize - iSmallSize) / 2) && ((iSmallCoord + iSmallSize + ((iBigSize - iSmallSize) / 2)) <= iWindowSize)) {
			return iSmallCoord;
		}
	}
	
	aThumbNoos.each(function(oThumbNoo, i) {
		var oAnchor = new Element('a').injectBefore(oThumbNoo).adopt(oThumbNoo);

		oAnchor.addEvent("mousedown", function(event) {
			var oCoords = oThumbNoo.getCoordinates();

			// due to change
			var m;
			if (m = oThumbNoo.className.match(new RegExp('h:(\\d+)')))
				var iBigHeight =  m[1];
			if (m = oThumbNoo.className.match(new RegExp('w:(\\d+)')))
				var iBigWidth = m[1];

			if (iBigWidth && iBigHeight) {
				var iScrollTop = window.getScrollTop(), iScrollLeft = window.getScrollLeft();
				var iWinWidth = window.getWidth(), iWinHeight = window.getHeight();

				var iOffsetX = offset(oThumbNoo, 'left'), iOffsetY = offset(oThumbNoo, 'top');

				var iBigX = Math.round(coord(iWinWidth, oCoords.left - iScrollLeft, oCoords.width, iBigWidth)) + iScrollLeft;
				var iBigY = Math.round(coord(iWinHeight, oCoords.top - iScrollTop, oCoords.height, iBigHeight)) + iScrollTop;

				var oAnchorClone = new Element('a').injectInside(document.body);
				var oThumbClone = oThumbNoo.clone();
				
				// clone can't have a float
				if (oThumbNoo.getStyle("float") != "none")
					oThumbClone.setStyle("float", "none");

				oAnchorClone.adopt(oThumbClone);

				oAnchorClone.setStyle("position", "absolute");
				oAnchorClone.setStyle("top", oCoords.top - iOffsetY);
				oAnchorClone.setStyle("left", oCoords.left - iOffsetX);
				oAnchorClone.addClass("thumbnood");
	
				var fx = new Fx.Elements([oThumbClone, oAnchorClone], {wait: false, duration: 600, transition:Fx.Transitions.Back.easeOut, onComplete:fn});

				var o = {}
				o[0] = {width: [oCoords.width, iBigWidth], height: [oCoords.height, iBigHeight]}
				o[1] = {top:[oCoords.top, iBigY], left:[oCoords.left, iBigX]}
				fx.start(o);
	
				oAnchorClone.addEvent("mousedown", function(event) {
					oCurrentNoo = oAnchorClone;
					o[0] = {width: [iBigWidth, oCoords.width], height: [iBigHeight, oCoords.height]}
					o[1] = {top:[iBigY, oCoords.top - iOffsetY], left:[iBigX, oCoords.left - iOffsetX]}
					fx.start(o);
				});
			}
		});
	});
});