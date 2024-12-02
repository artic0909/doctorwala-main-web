document
  .getElementById("add-section-button")
  .addEventListener("click", function () {
    const parentDiv = document.getElementById("add-same-section");

    // Create a new div to wrap the input and button
    const newFeatureDiv = document.createElement("div");
    newFeatureDiv.classList.add(
      "col-3",
      "form-group",
      "d-flex",
      "align-items-center",
      "mt-2"
    );

    // Create the new input
    const newInput = document.createElement("input");
    newInput.type = "text";
    newInput.classList.add("form-control");
    newInput.style.height = "55px";
    newInput.placeholder = "Enter a feature";

    // Create a remove button
    const removeButton = document.createElement("button");
    removeButton.type = "button";
    removeButton.textContent = "REMOVE";
    removeButton.classList.add("btn", "btn-danger", "rounded", "ml-3");
    removeButton.style.height = "55px";
    removeButton.style.fontWeight = "700";

    // Add an event listener to remove the feature
    removeButton.addEventListener("click", function () {
      parentDiv.removeChild(newFeatureDiv);
    });

    // Append the input and remove button to the new div
    newFeatureDiv.appendChild(newInput);
    newFeatureDiv.appendChild(removeButton);

    // Append the new feature div to the parent
    parentDiv.appendChild(newFeatureDiv);
  });
