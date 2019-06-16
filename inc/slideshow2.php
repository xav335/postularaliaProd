
    <script type="text/javascript" src="js/jssor.slider-22.0.6.min.js"></script>

    <script>
        var _SlideshowTransitionC = {};
        var _SlideshowTransitionCodes = {};
        var _SlideshowTransitions = [];


        //----------- Zoom Effects --------------
        {
/*
            _SlideshowTransitionC["Zoom VDouble+ in"] = { $Duration: 1200, y: 2, $Rows: 2, $Zoom: 11, $Assembly: 2049, $ChessMode: { $Row: 15 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom VDouble+ in"] = "{$Duration:1200,y:2,$Rows:2,$Zoom:11,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom HDouble+ in"] = { $Duration: 1200, x: 4, $Cols: 2, $Zoom: 11, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom HDouble+ in"] = "{$Duration:1200,x:4,$Cols:2,$Zoom:11,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom VDouble- in"] = { $Duration: 1200, y: 1, $Rows: 2, $Zoom: 1, $Assembly: 2049, $ChessMode: { $Row: 15 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom VDouble- in"] = "{$Duration:1200,y:1,$Rows:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom HDouble- in"] = { $Duration: 1200, x: 0.5, $Cols: 2, $Zoom: 1, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom HDouble- in"] = "{$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom VDouble+ out"] = { $Duration: 1200, y: 2, $Rows: 2, $Zoom: 11, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Row: 15 }, $Easing: { $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom VDouble+ out"] = "{$Duration:1200,y:2,$Rows:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom HDouble+ out"] = { $Duration: 1200, x: 4, $Cols: 2, $Zoom: 11, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom HDouble+ out"] = "{$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom VDouble- out"] = { $Duration: 1200, y: 1, $Rows: 2, $Zoom: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Row: 15 }, $Easing: { $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom VDouble- out"] = "{$Duration:1200,y:1,$Rows:2,$Zoom:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom HDouble- out"] = { $Duration: 1200, x: 0.5, $Cols: 2, $Zoom: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: { $Column: 15 }, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom HDouble- out"] = "{$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";
*/
            _SlideshowTransitionC["Zoom+ in"] = { $Duration: 5000, $Zoom: 5, $Easing: { $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity:2 };
            _SlideshowTransitionCodes["Zoom+ in"] = "{$Duration:5000,$Zoom:5,$Easing:{$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:1}";
/*
            _SlideshowTransitionC["Zoom+ in L"] = { $Duration: 5000, x: 4, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ in L"] = "{$Duration:1000,x:4,$Zoom:11,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in R"] = { $Duration: 1000, x: -4, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Top: 2.5 } };
            _SlideshowTransitionCodes["Zoom+ in R"] = "{$Duration:1000,x:-4,$Zoom:11,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2,$Round:{$Top:2.5}}";

            _SlideshowTransitionC["Zoom+ in T"] = { $Duration: 1000, y: 4, $Zoom: 11, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ in T"] = "{$Duration:1000,y:4,$Zoom:11,$Easing:{$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in B"] = { $Duration: 1000, y: -4, $Zoom: 11, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ in B"] = "{$Duration:1000,y:-4,$Zoom:11,$Easing:{$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in TL"] = { $Duration: 1000, x: 4, y: 4, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ in TL"] = "{$Duration:1000,x:4,y:4,$Zoom:11,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in TR"] = { $Duration: 1000, x: -4, y: 4, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ in TR"] = "{$Duration:1000,x:-4,y:4,$Zoom:11,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in BL"] = { $Duration: 1000, x: 4, y: -4, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ in BL"] = "{$Duration:1000,x:4,y:-4,$Zoom:11,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ in BR"] = { $Duration: 1000, x: -4, y: -4, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ in BR"] = "{$Duration:1000,x:-4,y:-4,$Zoom:11,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out"] = { $Duration: 1000, $Zoom: 11, $SlideOut: true, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ out"] = "{$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out L"] = { $Duration: 1000, x: 4, $Zoom: 11, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ out L"] = "{$Duration:1000,x:4,$Zoom:11,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out R"] = { $Duration: 1000, x: -4, $Zoom: 11, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ out R"] = "{$Duration:1000,x:-4,$Zoom:11,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out T"] = { $Duration: 1000, y: 4, $Zoom: 11, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ out T"] = "{$Duration:1000,y:4,$Zoom:11,$SlideOut:true,$Easing:{$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out B"] = { $Duration: 1000, y: -4, $Zoom: 11, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ out B"] = "{$Duration:1000,y:-4,$Zoom:11,$SlideOut:true,$Easing:{$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out TL"] = { $Duration: 1000, x: 4, y: 4, $Zoom: 11, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ out TL"] = "{$Duration:1000,x:4,y:4,$Zoom:11,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out TR"] = { $Duration: 1000, x: -4, y: 4, $Zoom: 11, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ out TR"] = "{$Duration:1000,x:-4,y:4,$Zoom:11,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out BL"] = { $Duration: 1000, x: 4, y: -4, $Zoom: 11, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ out BL"] = "{$Duration:1000,x:4,y:-4,$Zoom:11,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom+ out BR"] = { $Duration: 1000, x: -4, y: -4, $Zoom: 11, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom+ out BR"] = "{$Duration:1000,x:-4,y:-4,$Zoom:11,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in"] = { $Duration: 1200, $Zoom: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- in"] = "{$Duration:1200,$Zoom:1,$Easing:{$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in L"] = { $Duration: 1200, x: 0.6, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- in L"] = "{$Duration:1200,x:0.6,$Zoom:1,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in R"] = { $Duration: 1200, x: -0.6, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- in R"] = "{$Duration:1200,x:-0.6,$Zoom:1,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in T"] = { $Duration: 1200, y: 0.6, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- in T"] = "{$Duration:1200,y:0.6,$Zoom:1,$Easing:{$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in B"] = { $Duration: 1200, y: -0.6, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- in B"] = "{$Duration:1200,y:-0.6,$Zoom:1,$Easing:{$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in TL"] = { $Duration: 1200, x: 0.6, y: 0.6, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- in TL"] = "{$Duration:1200,x:0.6,y:0.6,$Zoom:1,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in TR"] = { $Duration: 1200, x: -0.6, y: 0.6, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- in TR"] = "{$Duration:1200,x:-0.6,y:0.6,$Zoom:1,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in BL"] = { $Duration: 1200, x: 0.6, y: -0.6, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- in BL"] = "{$Duration:1200,x:0.6,y:-0.6,$Zoom:1,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- in BR"] = { $Duration: 1200, x: -0.6, y: -0.6, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- in BR"] = "{$Duration:1200,x:-0.6,y:-0.6,$Zoom:1,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Top:$JssorEasing$.$EaseInCubic,$Zoom:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out"] = { $Duration: 1000, $Zoom: 1, $SlideOut: true, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- out"] = "{$Duration:1000,$Zoom:1,$SlideOut:true,$Easing:{$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out L"] = { $Duration: 1000, x: 1, $Zoom: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- out L"] = "{$Duration:1000,x:1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out R"] = { $Duration: 1000, x: -1, $Zoom: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- out R"] = "{$Duration:1000,x:-1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out T"] = { $Duration: 1000, y: 1, $Zoom: 1, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- out T"] = "{$Duration:1000,y:1,$Zoom:1,$SlideOut:true,$Easing:{$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out B"] = { $Duration: 1000, y: -1, $Zoom: 1, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- out B"] = "{$Duration:1000,y:-1,$Zoom:1,$SlideOut:true,$Easing:{$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out TL"] = { $Duration: 1000, x: 1, y: 1, $Zoom: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- out TL"] = "{$Duration:1000,x:1,y:1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out TR"] = { $Duration: 1000, x: -1, y: 1, $Zoom: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- out TR"] = "{$Duration:1000,x:-1,y:1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out BL"] = { $Duration: 1000, x: 1, y: -1, $Zoom: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- out BL"] = "{$Duration:1000,x:1,y:-1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

            _SlideshowTransitionC["Zoom- out BR"] = { $Duration: 1000, x: -1, y: -1, $Zoom: 1, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _SlideshowTransitionCodes["Zoom- out BR"] = "{$Duration:1000,x:-1,y:-1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInExpo,$Top:$JssorEasing$.$EaseInExpo,$Zoom:$JssorEasing$.$EaseInExpo,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2}";

             */
            
            
          }

                       
        $Jssor$.$Each(_SlideshowTransitionC, function (slideshowTransition, name) {
            _SlideshowTransitions.push(slideshowTransition);
        });
    </script>
    <script>
        jssor_slider1_starter = function (containerId) {
            var jssor_slider1 = new $JssorSlider$(containerId, {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $Idle: 400,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                 //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                }
            });

            PlaySlideshowTransition = function (event) {
                $Jssor$.$StopEvent(event);
                $Jssor$.$CancelEvent(event);

                try {
                    var eventSrcElement = $Jssor$.$EvtSrc(event);
                    var transitionName = $Jssor$.$InnerText(eventSrcElement);
                    jssor_slider1.$Next();

                    jssor_slider1.$SetSlideshowTransitions([_SlideshowTransitionC[transitionName]]);

                    var effectStr = _SlideshowTransitionCodes[transitionName];

                    if (transitionNameTextBox) {
                        transitionNameTextBox.value = transitionName;
                    }
                    if (transitionCodeTextBox) {
                        transitionCodeTextBox.value = effectStr;
                    }
                }
                catch (e) { }
            }

            TransitionTextBoxClickEventHandler = function (event) {
                transitionCodeTextBox.select();

                $Jssor$.$CancelEvent(event);
                $Jssor$.$StopEvent(event);
            }

            var transitionCodeTextBox = $Jssor$.$GetElement("stTransition");
            var transitionNameTextBox = $Jssor$.$GetElement("stTransitionName");
            $Jssor$.$AddEvent(transitionCodeTextBox, "click", TransitionTextBoxClickEventHandler);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 600));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

