let html = "<div class=\"row justify-content-center\">\n" +
    "        <img src=\"controller/img/1.png\" class=\"col-4 img--size\">\n" +
    "        <div class=\"col-6 txt--size\">\n" +
    "            <strong class=\"col-4 title\">Title title</strong>\n" +
    "            <div class=\"col-8 txt-con\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam.</div>\n" +
    "\n" +
    "            <div class=\"row row--height\">\n" +
    "                <a href=\"#\" class=\"col-2 tag--contr tag--margin-left1\"style=\"color: black\">Tag 1</a>\n" +
    "                <a href=\"#\" class=\"col-2 tag--contr tag--margin-left2\"style=\"color: black\">Tag 2</a>\n" +
    "                <a href=\"#\" class=\"col-2 tag--contr tag--margin-left3\"style=\"color: black\">Tag 3</a>\n" +
    "\n" +
    "            </div>\n" +
    "        </div>\n" +
    "    </div>\n" +
    "    <hr class=\"col-8\">";



var text = "";
var i;
for (i = 0; i < 150; i++) {
    text += html;
}
document.getElementById("loop").innerHTML = text;




//////////////////////////////////









