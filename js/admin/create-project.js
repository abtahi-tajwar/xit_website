const project_feature_input = `
    <div class="input-group mb-3 item">
        <span class="input-group-text" id="basic-addon1">Project Featue</span>
        <input type="text" name="project-feature[]" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
`;
const add_project_feature = document.getElementById('add-project-feature');

// Creating an array to store all the features that has input by user,  This is necessary because appending innerHTML clears out all the existing inputs
let features = [];
add_project_feature.addEventListener('click', () => {
    // Initialize feature list every time someone press add item button
    features = [];
    // Copies all the input feature field values to features array 
    document.querySelectorAll('.project-feature-list .item input').forEach(item => {
        features.push(item.value);
    })
    // Add new add feature input field
    document.querySelector('.project-feature-list').innerHTML += project_feature_input;
    // Add value of newly added input fields value to feature list array
    features.push("");
    // Put all the values the way those were after adding new input field
    document.querySelectorAll('.project-feature-list .item input').forEach((item, i) => {
        item.value = features[i];
    })

})

const dragArea = document.querySelector('.project-feature-list')
new Sortable(dragArea, {
    animation: 35
})