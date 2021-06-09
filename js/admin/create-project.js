const project_feature_input = `
<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Project Featue</span>
    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
`;
const add_project_feature = document.getElementById('add-project-feature');
add_project_feature.addEventListener('click', () => {
    document.querySelector('.project-feature-list').innerHTML += project_feature_input;
})