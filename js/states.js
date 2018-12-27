var states = ["Andaman and Nicobar Islands","Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Dadra and Nagar Haveli","Daman and Diu","Delhi","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Lakshadweep","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Orissa","Pondicherry","Punjab","Rajasthan","Sikkim","Tamil Nadu","Tripura","Uttar Pradesh","Uttarakhand","West Bengal"
];     

var sel = document.getElementById('state');
var fragment = document.createDocumentFragment();

states.forEach(function(states, index) {
    var opt = document.createElement('option');
    opt.innerHTML = states;
    opt.value = states;
    fragment.appendChild(opt);
});

sel.appendChild(fragment);