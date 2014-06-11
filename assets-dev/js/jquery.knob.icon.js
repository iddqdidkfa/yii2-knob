function addKnobIcon(selector, iconHtml) {
    var el = jQuery(selector);
    var div = el.parent();
    var canvas = div.find('canvas');
    var divHeight = parseInt(div.css('height'));
    var iconSize = parseInt(parseInt(el.css('font-size')) * 1.3);
    var canvasWidth = parseInt(canvas.css('width'));
    var canvasHeight = parseInt(canvas.css('height'));
    var elMargin = parseInt(el.css('margin-top'));
    el.css('margin-top', (elMargin + iconSize - parseInt(iconSize / 8)) + 'px');
    div.css('position', 'relative');
    var icon = jQuery(iconHtml);
    icon.css('font-size', iconSize + 'px');
    icon.css('position', 'absolute');
    icon.css('left', parseInt(canvasWidth / 2) - parseInt(iconSize / 2) + 'px');
    icon.css('margin-top', '-' + ((canvasHeight - canvasWidth) + parseInt(canvasWidth / 2) + parseInt(iconSize / 2) + parseInt(canvasWidth / 20) - divHeight + 6) + 'px');
    div.append(icon);
}