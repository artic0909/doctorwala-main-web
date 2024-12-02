// Select the parent container and button
const parentContainer = document.getElementById("add-same-section");
const addButton = document.getElementById("add-section-button");

// Add event listener to the "ADD" button
addButton.addEventListener("click", () => {
  // Create a new section
  const newSection = document.createElement("div");
  newSection.className = "row col-12 mt-3";

  newSection.innerHTML = `
            <div class="col-3 form-group">
                <label for="name" style="font-weight: 700;">
                    <i class="fa-solid fa-calendar-days text-primary"></i>
                    Day <span class="text-danger">*</span>
                </label>
                <select name="" id="" class="form-control" style="height: 55px;">
                    <option selected>Select Day</option>
                    <option value="All Day">All Day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
            </div>

            <div class="col-4 form-group">
                <label for="name" style="font-weight: 700;">
                    <i class="fa-solid fa-clock text-primary"></i>
                    Time From <span class="text-danger">*</span>
                </label>
                <input type="time" class="form-control" style="height: 55px;">
            </div>

            <div class="col-4 form-group">
                <label for="name" style="font-weight: 700;">
                    <i class="fa-solid fa-clock-rotate-left text-primary"></i>
                    Time To <span class="text-danger">*</span>
                </label>

                <div class="d-flex align-items-center">
                    <input type="time" class="form-control" style="height: 55px;">
                    <button type="button" class="btn btn-danger rounded col-3 ml-3 remove-section-button" 
                            style="height: 55px; font-weight: 700;">REMOVE</button>
                </div>
            </div>
        `;

  // Append the new section to the parent container
  parentContainer.appendChild(newSection);

  // Add event listener to the remove button
  const removeButtons = document.querySelectorAll(".remove-section-button");
  removeButtons.forEach((button) => {
    button.addEventListener("click", function () {
      this.closest(".row").remove();
    });
  });
});
