var getVideoListModalId = document.getElementById("videoListModalId");
function clearVideoList() {
  var getVideoListModalForm = document.getElementsByClassName(
    "videoListModalForm"
  );

  var getvideoListModalForm1 = document.getElementById("videoListModalForm1");
  var getvideoListModalForm2 = document.getElementById("videoListModalForm2");
  var getvideoListModalForm3 = document.getElementById("videoListModalForm3");
  var getvideoListModalForm4 = document.getElementById("videoListModalForm4");
  var getvideoListModalForm5 = document.getElementById("videoListModalForm5");
  var getvideoListModalForm6 = document.getElementById("videoListModalForm6");

  if (getvideoListModalForm1 != null) {
    getvideoListModalForm1.remove();
  }
  if (getvideoListModalForm2 != null) {
    getvideoListModalForm2.remove();
  }
  if (getvideoListModalForm3 != null) {
    getvideoListModalForm3.remove();
  }
  if (getvideoListModalForm4 != null) {
    getvideoListModalForm4.remove();
  }
  if (getvideoListModalForm5 != null) {
    getvideoListModalForm5.remove();
  }
  if (getvideoListModalForm6 != null) {
    getvideoListModalForm6.remove();
  }
}
function prepareVideoListModal(no1, no2, no3, no4, no5, no6) {
  clearVideoList();

  if (no1 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "video-play");
    form.setAttribute("method", "post");
    form.setAttribute("id", "videoListModalForm1");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no1);
    hiddenInput.setAttribute("name", "session_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", "Recording 1");

    getVideoListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no2 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "video-play");
    form.setAttribute("method", "post");
    form.setAttribute("id", "videoListModalForm2");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no2);
    hiddenInput.setAttribute("name", "session_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", "Recording 2");

    getVideoListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no3 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "video-play");
    form.setAttribute("method", "post");
    form.setAttribute("id", "videoListModalForm3");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no3);
    hiddenInput.setAttribute("name", "session_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", "Recording 3");

    getVideoListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no4 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "video-play");
    form.setAttribute("method", "post");
    form.setAttribute("id", "videoListModalForm4");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no4);
    hiddenInput.setAttribute("name", "session_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", "Recording 4");

    getVideoListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no5 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "video-play");
    form.setAttribute("method", "post");
    form.setAttribute("id", "videoListModalForm5");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no5);
    hiddenInput.setAttribute("name", "session_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", "Recording 5");

    getVideoListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no6 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "video-play");
    form.setAttribute("method", "post");
    form.setAttribute("id", "videoListModalForm6");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no6);
    hiddenInput.setAttribute("name", "session_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", "Recording 6");

    getVideoListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }
}
//
var getreadingMaterialListModalId = document.getElementById(
  "readingMaterialListModalId"
);
function clearReadingMaterialList() {
  var getReadingMaterialListModalForm = document.getElementsByClassName(
    "readingMaterialListModal"
  );

  var getReadingMaterialListModalForm1 = document.getElementById(
    "readingMaterialListModalForm1"
  );
  var getReadingMaterialListModalForm2 = document.getElementById(
    "readingMaterialListModalForm2"
  );
  var getReadingMaterialListModalForm3 = document.getElementById(
    "readingMaterialListModalForm3"
  );
  var getReadingMaterialListModalForm4 = document.getElementById(
    "readingMaterialListModalForm4"
  );
  var getReadingMaterialListModalForm5 = document.getElementById(
    "readingMaterialListModalForm5"
  );
  var getReadingMaterialListModalForm6 = document.getElementById(
    "readingMaterialListModalForm6"
  );
  var getReadingMaterialListModalForm7 = document.getElementById(
    "readingMaterialListModalForm7"
  );
  var getReadingMaterialListModalForm8 = document.getElementById(
    "readingMaterialListModalForm8"
  );
  var getReadingMaterialListModalForm9 = document.getElementById(
    "readingMaterialListModalForm9"
  );
  var getReadingMaterialListModalForm10 = document.getElementById(
    "readingMaterialListModalForm10"
  );

  if (getReadingMaterialListModalForm1 != null) {
    getReadingMaterialListModalForm1.remove();
  }
  if (getReadingMaterialListModalForm2 != null) {
    getReadingMaterialListModalForm2.remove();
  }
  if (getReadingMaterialListModalForm3 != null) {
    getReadingMaterialListModalForm3.remove();
  }
  if (getReadingMaterialListModalForm4 != null) {
    getReadingMaterialListModalForm4.remove();
  }
  if (getReadingMaterialListModalForm5 != null) {
    getReadingMaterialListModalForm5.remove();
  }
  if (getReadingMaterialListModalForm6 != null) {
    getReadingMaterialListModalForm6.remove();
  }
  if (getReadingMaterialListModalForm7 != null) {
    getReadingMaterialListModalForm7.remove();
  }
  if (getReadingMaterialListModalForm8 != null) {
    getReadingMaterialListModalForm8.remove();
  }
  if (getReadingMaterialListModalForm9 != null) {
    getReadingMaterialListModalForm9.remove();
  }
  if (getReadingMaterialListModalForm10 != null) {
    getReadingMaterialListModalForm10.remove();
  }
}
function prepareReadingMaterialListModal(
  topic1,
  no1,
  topic2,
  no2,
  topic3,
  no3,
  topic4,
  no4,
  topic5,
  no5,
  topic6,
  no6,
  topic7,
  no7,
  topic8,
  no8,
  topic9,
  no9,
  topic10,
  no10
) {
  clearReadingMaterialList();
  console.log(topic1);
  console.log(topic2);
  if (no1 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "readingMaterialListModalForm1");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no1);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic1);

    getreadingMaterialListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no2 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "readingMaterialListModalForm2");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no2);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic2);

    getreadingMaterialListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no3 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "readingMaterialListModalForm3");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no3);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic3);

    getreadingMaterialListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no4 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "readingMaterialListModalForm4");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no4);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic4);

    getreadingMaterialListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no5 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "readingMaterialListModalForm5");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no5);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic5);

    getreadingMaterialListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no6 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "readingMaterialListModalForm6");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no6);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic6);
    

    getreadingMaterialListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no7 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "readingMaterialListModalForm7");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no7);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic7);

    getreadingMaterialListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no8 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "readingMaterialListModalForm8");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no8);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic8);

    getreadingMaterialListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no9 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "readingMaterialListModalForm9");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no9);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic9);

    getreadingMaterialListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no10 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "readingMaterialListModalForm10");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no10);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic10);

    getreadingMaterialListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }
  // if (
  //   no1 == undefined &&
  //   no2 == undefined &&
  //   no3 == undefined &&
  //   no4 == undefined &&
  //   no5 == undefined &&
  //   no6 == undefined &&
  //   no7 == undefined &&
  //   no8 == undefined &&
  //   no9 == undefined &&
  //   no10 == undefined
  // ) {
  //   console.log("anzr");
  //   var submitBtn = document.createElement("div");
  //   submitBtn.setAttribute("class", "text-dark");

  //   var t = document.createTextNode("No Data Found");
  //   submitBtn.appendChild(t);
  //   getreadingMaterialListModalId.appendChild(submitBtn);
  // }
}

//
var getsessionResourceListModalId = document.getElementById(
  "sessionResourceListModalId"
);
function clearsessionResourceList() {
  var getsessionResourceListModalForm = document.getElementsByClassName(
    "sessionResourceListModal"
  );

  var getsessionResourceListModalForm1 = document.getElementById(
    "sessionResourceListModalForm1"
  );
  var getsessionResourceListModalForm2 = document.getElementById(
    "sessionResourceListModalForm2"
  );
  var getsessionResourceListModalForm3 = document.getElementById(
    "sessionResourceListModalForm3"
  );
  var getsessionResourceListModalForm4 = document.getElementById(
    "sessionResourceListModalForm4"
  );
  var getsessionResourceListModalForm5 = document.getElementById(
    "sessionResourceListModalForm5"
  );
  var getsessionResourceListModalForm6 = document.getElementById(
    "sessionResourceListModalForm6"
  );
  var getsessionResourceListModalForm7 = document.getElementById(
    "sessionResourceListModalForm7"
  );
  var getsessionResourceListModalForm8 = document.getElementById(
    "sessionResourceListModalForm8"
  );
  var getsessionResourceListModalForm9 = document.getElementById(
    "sessionResourceListModalForm9"
  );
  var getsessionResourceListModalForm10 = document.getElementById(
    "sessionResourceListModalForm10"
  );

  if (getsessionResourceListModalForm1 != null) {
    getsessionResourceListModalForm1.remove();
  }
  if (getsessionResourceListModalForm2 != null) {
    getsessionResourceListModalForm2.remove();
  }
  if (getsessionResourceListModalForm3 != null) {
    getsessionResourceListModalForm3.remove();
  }
  if (getsessionResourceListModalForm4 != null) {
    getsessionResourceListModalForm4.remove();
  }
  if (getsessionResourceListModalForm5 != null) {
    getsessionResourceListModalForm5.remove();
  }
  if (getsessionResourceListModalForm6 != null) {
    getsessionResourceListModalForm6.remove();
  }
  if (getsessionResourceListModalForm7 != null) {
    getsessionResourceListModalForm7.remove();
  }
  if (getsessionResourceListModalForm8 != null) {
    getsessionResourceListModalForm8.remove();
  }
  if (getsessionResourceListModalForm9 != null) {
    getsessionResourceListModalForm9.remove();
  }
  if (getsessionResourceListModalForm10 != null) {
    getsessionResourceListModalForm10.remove();
  }
}
function prepareSessionResourceListModal(
  topic1,
  no1,
  topic2,
  no2,
  topic3,
  no3,
  topic4,
  no4,
  topic5,
  no5,
  topic6,
  no6,
  topic7,
  no7,
  topic8,
  no8,
  topic9,
  no9,
  topic10,
  no10
) {
  clearsessionResourceList();
   
  if (no1 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "sessionResourceListModalForm1");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no1);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic1);

    getsessionResourceListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no2 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "sessionResourceListModalForm2");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no2);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic2);

    getsessionResourceListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no3 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "sessionResourceListModalForm3");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no3);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic3);

    getsessionResourceListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no4 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "sessionResourceListModalForm4");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no4);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic4);

    getsessionResourceListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no5 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "sessionResourceListModalForm5");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no5);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic5);

    getsessionResourceListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no6 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "sessionResourceListModalForm6");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no6);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic6);

    getsessionResourceListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no7 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "sessionResourceListModalForm7");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no7);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic7);

    getsessionResourceListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no8 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "sessionResourceListModalForm8");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no8);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic8);

    getsessionResourceListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no9 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "sessionResourceListModalForm9");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no9);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic9);

    getsessionResourceListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  if (no10 != undefined) {
    var form = document.createElement("form");
    form.setAttribute("action", "download_material");
    form.setAttribute("method", "post");
    form.setAttribute("id", "sessionResourceListModalForm10");

    var hiddenInput = document.createElement("input");
    hiddenInput.setAttribute("type", "hidden");
    hiddenInput.setAttribute("value", no10);
    hiddenInput.setAttribute("name", "material_id");

    var submitBtn = document.createElement("input");
    submitBtn.setAttribute("type", "submit");
    submitBtn.setAttribute("name", "download_material");
    submitBtn.setAttribute("class", "btn btn-link");
    submitBtn.setAttribute("value", topic10);

    getsessionResourceListModalId.appendChild(form);
    form.appendChild(hiddenInput);
    form.appendChild(submitBtn);
  }

  // if (
  //   no1 == undefined &&
  //   no2 == undefined &&
  //   no3 == undefined &&
  //   no4 == undefined &&
  //   no5 == undefined &&
  //   no6 == undefined &&
  //   no7 == undefined &&
  //   no8 == undefined &&
  //   no9 == undefined &&
  //   no10 == undefined
  // ) {
  //   console.log("anzr");
  //   var submitBtn = document.createElement("div");
  //   submitBtn.setAttribute("class", "text-dark");

  //   var t = document.createTextNode("No Data Found");
  //   submitBtn.appendChild(t);
  //   getsessionResourceListModalId.appendChild(submitBtn);
  // }
}

function prepareNoVideoReason(video_comment) {
  var get_noVideoReasonModalId = document.getElementById(
    "noVideoReasonModalId"
  );
  get_noVideoReasonModalId.innerHTML = video_comment;
}
