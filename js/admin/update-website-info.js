const service_list_output = `
<div class="input-group mb-3 item">                            
    <span class="input-group-text" id="basic-addon1">Services</span>
    <input type="text" value="{{$service[0]}}" name="project-services-title[]" class="form-control" placeholder="Service Title" aria-label="Username" aria-describedby="basic-addon1">
    <input type="text" value="{{$service[1]}}" name="project-services-subtitle[]" class="form-control" placeholder="Service Subtitle" aria-label="Username" aria-describedby="basic-addon1">
</div>
`;
const about_servies_output = `
<div class="input-group mb-3 item">
    <span class="input-group-text" id="basic-addon1">Project Featue</span>
    <input type="text" value="{{ $about_service }}" name="about-services[]" class="form-control" placeholder="About Services" aria-label="Username" aria-describedby="basic-addon1">
</div>
`
const phone_list_output = `
<div class="input-group mb-3 item">
    <span class="input-group-text" id="basic-addon1">Project Featue</span>
    <input type="text" value="{{ $phone }}" name="phone-numbers[]" class="form-control" placeholder="Phone no" aria-label="Username" aria-describedby="basic-addon1">
</div>
`
const add_services = document.getElementById('add-project-service');
const add_about_services = document.getElementById('add-about-service');
const add_phone_number = document.getElementById('add-phone-number');

// Creating an array to store all the features that has input by user,  This is necessary because appending innerHTML clears out all the existing inputs
let about_services_title = [];
let about_services_subtitle = [];
let service_list = [];
let phone_list = [];

//For Services
add_services.addEventListener('click', () => {
    // Initialize feature list every time someone press add item button
    about_services_title = [];
    about_services_subtitle = [];
    // Copies all the input feature field values to features array 
    document.querySelectorAll('.project-service-list .item input:nth-of-type(1)').forEach(item => {
        about_services_title.push(item.value);
    })
    // Copies all the input feature field values to features array 
    document.querySelectorAll('.project-service-list .item input:nth-of-type(2)').forEach(item => {
        about_services_subtitle.push(item.value);
    })
    // Add new add feature input field
    document.querySelector('.project-service-list').innerHTML += service_list_output;
    // Add value of newly added input fields value to feature list array
    about_services_title.push("");
    about_services_subtitle.push("");

    // Put all the values the way those were after adding new input field
    document.querySelectorAll('.project-service-list .item input:nth-of-type(1)').forEach((item, i) => {
        item.value = about_services_title[i];
    })
    // Put all the values the way those were after adding new input field
    document.querySelectorAll('.project-service-list .item input:nth-of-type(2)').forEach((item, i) => {
        item.value = about_services_subtitle[i];
    })

})
//For About Services
add_about_services.addEventListener('click', () => {
    // Initialize feature list every time someone press add item button
    service_list = [];
    // Copies all the input feature field values to features array 
    document.querySelectorAll('.about-service-list .item input').forEach(item => {
        service_list.push(item.value);
    })
    // Add new add feature input field
    document.querySelector('.about-service-list').innerHTML += about_servies_output;
    // Add value of newly added input fields value to feature list array
    service_list.push("");
    // Put all the values the way those were after adding new input field
    document.querySelectorAll('.about-service-list .item input').forEach((item, i) => {
        item.value = service_list[i];
    })

})
//For Services
add_phone_number.addEventListener('click', () => {
    // Initialize feature list every time someone press add item button
    phone_list = [];
    // Copies all the input feature field values to features array 
    document.querySelectorAll('.website-phone-list .item input').forEach(item => {
        phone_list.push(item.value);
    })
    // Add new add feature input field
    document.querySelector('.website-phone-list').innerHTML += phone_list_output;
    // Add value of newly added input fields value to feature list array
    phone_list.push("");
    // Put all the values the way those were after adding new input field
    document.querySelectorAll('.website-phone-list .item input').forEach((item, i) => {
        item.value = phone_list[i];
    })

})