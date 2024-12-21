document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.querySelector("#globalSearchInput");
    const searchButton = document.querySelector("#globalSearchButton");
    const resultsContainer = document.querySelector("#globalResultsContainer");

    searchButton.addEventListener("click", function (e) {
        e.preventDefault();

        const searchTerm = searchInput.value.trim();

        if (searchTerm) {
            fetch(`/global-search?search=${encodeURIComponent(searchTerm)}`)
                .then((response) => response.json())
                .then((data) => {
                    resultsContainer.innerHTML = "";

                    // Render OPD results
                    if (data.opd_results.length > 0) {
                        resultsContainer.innerHTML += `<h3>OPD Results</h3>`;
                        data.opd_results.forEach((item) => {
                            const imageUrl =
                                item.banner && item.banner.opdbanner
                                    ? `/storage/${item.banner.opdbanner}`
                                    : "https://media.istockphoto.com/id/1222357475/vector/image-preview-icon-picture-placeholder-for-website-or-ui-ux-design-vector-illustration.jpg?s=612x612&w=0&k=20&c=KuCo-dRBYV7nz2gbk4J9w1WtTAgpTdznHu55W9FjimE=";
                            resultsContainer.innerHTML += `
                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                                <div class="team-item">
                                    <div class="position-relative rounded-top" style="z-index: 1;">
                                        <img class="img-fluid rounded-top w-100" src="${imageUrl}" alt="" style="border: 1px solid #ddd;">
                                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fa-solid fa-location-dot"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-text position-relative bg-light text-start rounded-bottom p-4 pt-5">
                                        <h4 class="mb-2"><a href="/dw/opd/${item.id}" style="text-decoration: none; text-transform: capitalize;" class="text-dark">${item.clinic_name}</a></h4>
                                        <p class="text-primary mb-2"><a href="/dw/opd/${item.id}" style="text-decoration: none; text-transform: capitalize;" class="text-primary">${item.clinic_address}</a></p>
                                        <a href="/dw/opd/${item.id}" class="btn btn-primary p-2 w-100" style="text-decoration: none;">OPEN NOW</a>
                                    </div>
                                </div>
                            </div>`;
                        });
                    }

                    // Render Pathology results
                    if (data.pathology_results.length > 0) {
                        resultsContainer.innerHTML += `<h3>Pathology Results</h3>`;
                        data.pathology_results.forEach((item) => {
                            const imageUrl =
                                item.banner && item.banner.pathologybanner
                                    ? `/storage/${item.banner.pathologybanner}`
                                    : "https://media.istockphoto.com/id/1222357475/vector/image-preview-icon-picture-placeholder-for-website-or-ui-ux-design-vector-illustration.jpg?s=612x612&w=0&k=20&c=KuCo-dRBYV7nz2gbk4J9w1WtTAgpTdznHu55W9FjimE=";
                            resultsContainer.innerHTML += `
                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                                <div class="team-item">
                                    <div class="position-relative rounded-top" style="z-index: 1;">
                                        <img class="img-fluid rounded-top w-100" src="${imageUrl}" alt="" style="border: 1px solid #ddd;">
                                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fa-solid fa-location-dot"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-text position-relative bg-light text-start rounded-bottom p-4 pt-5">
                                        <h4 class="mb-2"><a href="/dw/pathology/${item.id}" style="text-decoration: none; text-transform: capitalize;" class="text-dark">${item.clinic_name}</a></h4>
                                        <p class="text-primary mb-2"><a href="/dw/pathology/${item.id}" style="text-decoration: none; text-transform: capitalize;" class="text-primary">${item.clinic_address}</a></p>
                                        <a href="/dw/pathology/${item.id}" class="btn btn-primary p-2 w-100" style="text-decoration: none;">OPEN NOW</a>
                                    </div>
                                </div>
                            </div>`;
                        });
                    }

                    // Render Doctor results
                    if (data.doctor_results.length > 0) {
                        resultsContainer.innerHTML += `<h3>Doctor Results</h3>`;
                        data.doctor_results.forEach((item) => {
                            const imageUrl =
                                item.banner && item.banner.doctorbanner
                                    ? `/storage/${item.banner.doctorbanner}`
                                    : "https://media.istockphoto.com/id/1222357475/vector/image-preview-icon-picture-placeholder-for-website-or-ui-ux-design-vector-illustration.jpg?s=612x612&w=0&k=20&c=KuCo-dRBYV7nz2gbk4J9w1WtTAgpTdznHu55W9FjimE=";
                            resultsContainer.innerHTML += `
                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                                <div class="team-item">
                                    <div class="position-relative rounded-top" style="z-index: 1;">
                                        <img class="img-fluid rounded-top w-100" src="${imageUrl}" alt="" style="border: 1px solid #ddd;">
                                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fa-solid fa-location-dot"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-text position-relative bg-light text-start rounded-bottom p-4 pt-5">
                                        <h4 class="mb-2"><a href="/dw/doctor/${item.id}" style="text-decoration: none; text-transform: capitalize;" class="text-dark">${item.partner_doctor_name}</a></h4>
                                        <p class="text-primary mb-2"><a href="/dw/doctor/${item.id}" style="text-decoration: none; text-transform: capitalize;" class="text-primary">${item.partner_doctor_address}</a></p>
                                        <a href="/dw/doctor/${item.id}" class="btn btn-primary p-2 w-100" style="text-decoration: none;">OPEN NOW</a>
                                    </div>
                                </div>
                            </div>`;
                        });
                    }

                    // Render OPD results by partner ID
                    if (data.opd_results_by_ids.length > 0) {
                        resultsContainer.innerHTML += `<h3>OPD Results</h3>`;
                        data.opd_results_by_ids.forEach((item) => {
                            const imageUrl =
                                item.banner && item.banner.opdbanner
                                    ? `/storage/${item.banner.opdbanner}`
                                    : "https://media.istockphoto.com/id/1222357475/vector/image-preview-icon-picture-placeholder-for-website-or-ui-ux-design-vector-illustration.jpg?s=612x612&w=0&k=20&c=KuCo-dRBYV7nz2gbk4J9w1WtTAgpTdznHu55W9FjimE=";
                            resultsContainer.innerHTML += `
                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                                <div class="team-item">
                                    <div class="position-relative rounded-top" style="z-index: 1;">
                                        <img class="img-fluid rounded-top w-100" src="${imageUrl}" alt="" style="border: 1px solid #ddd;">
                                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fa-solid fa-location-dot"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-text position-relative bg-light text-start rounded-bottom p-4 pt-5">
                                        <h4 class="mb-2"><a href="/dw/opd/${item.id}" style="text-decoration: none; text-transform: capitalize;" class="text-dark">${item.clinic_name}</a></h4>
                                        <p class="text-primary mb-2"><a href="/dw/opd/${item.id}" style="text-decoration: none; text-transform: capitalize;" class="text-primary">${item.clinic_address}</a></p>
                                        <a href="/dw/opd/${item.id}" class="btn btn-primary p-2 w-100" style="text-decoration: none;">OPEN NOW</a>
                                    </div>
                                </div>
                            </div>`;
                        });
                    }

                    // Render Pathology results by partner ID
                    if (data.pathology_results_by_ids.length > 0) {
                        resultsContainer.innerHTML += `<h3>Pathology Results</h3>`;
                        data.pathology_results_by_ids.forEach((item) => {
                            const imageUrl =
                                item.banner && item.banner.pathologybanner
                                    ? `/storage/${item.banner.pathologybanner}`
                                    : "https://media.istockphoto.com/id/1222357475/vector/image-preview-icon-picture-placeholder-for-website-or-ui-ux-design-vector-illustration.jpg?s=612x612&w=0&k=20&c=KuCo-dRBYV7nz2gbk4J9w1WtTAgpTdznHu55W9FjimE=";
                            resultsContainer.innerHTML += `
                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                                <div class="team-item">
                                    <div class="position-relative rounded-top" style="z-index: 1;">
                                        <img class="img-fluid rounded-top w-100" src="${imageUrl}" alt="" style="border: 1px solid #ddd;">
                                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fa-solid fa-location-dot"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-text position-relative bg-light text-start rounded-bottom p-4 pt-5">
                                        <h4 class="mb-2"><a href="/dw/pathology/${item.id}" style="text-decoration: none; text-transform: capitalize;" class="text-dark">${item.clinic_name}</a></h4>
                                        <p class="text-primary mb-2"><a href="/dw/pathology/${item.id}" style="text-decoration: none; text-transform: capitalize;" class="text-primary">${item.clinic_address}</a></p>
                                        <a href="/dw/pathology/${item.id}" class="btn btn-primary p-2 w-100" style="text-decoration: none;">OPEN NOW</a>
                                    </div>
                                </div>
                            </div>`;
                        });
                    }

                    // Render Doctor results by partner ID
                    if (data.doctor_results_by_ids.length > 0) {
                        resultsContainer.innerHTML += `<h3>Doctor Results</h3>`;
                        data.doctor_results_by_ids.forEach((item) => {
                            const imageUrl =
                                item.banner && item.banner.doctorbanner
                                    ? `/storage/${item.banner.doctorbanner}`
                                    : "https://media.istockphoto.com/id/1222357475/vector/image-preview-icon-picture-placeholder-for-website-or-ui-ux-design-vector-illustration.jpg?s=612x612&w=0&k=20&c=KuCo-dRBYV7nz2gbk4J9w1WtTAgpTdznHu55W9FjimE=";
                            resultsContainer.innerHTML += `
                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                                <div class="team-item">
                                    <div class="position-relative rounded-top" style="z-index: 1;">
                                        <img class="img-fluid rounded-top w-100" src="${imageUrl}" alt="" style="border: 1px solid #ddd;">
                                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fa-solid fa-location-dot"></i></a>
                                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-text position-relative bg-light text-start rounded-bottom p-4 pt-5">
                                        <h4 class="mb-2"><a href="/dw/doctor/${item.id}" style="text-decoration: none; text-transform: capitalize;" class="text-dark">${item.partner_doctor_name}</a></h4>
                                        <p class="text-primary mb-2"><a href="/dw/doctor/${item.id}" style="text-decoration: none; text-transform: capitalize;" class="text-primary">${item.partner_doctor_address}</a></p>
                                        <a href="/dw/doctor/${item.id}" class="btn btn-primary p-2 w-100" style="text-decoration: none;">OPEN NOW</a>
                                    </div>
                                </div>
                            </div>`;
                        });
                    }

                    // Show "No Results" if all lists are empty
                    if (
                        data.opd_results.length === 0 &&
                        data.pathology_results.length === 0 &&
                        data.doctor_results.length === 0 &&
                        data.opd_results_by_ids.length === 0 &&
                        data.pathology_results_by_ids.length === 0 &&
                        data.doctor_results_by_ids.length === 0
                    ) {
                        resultsContainer.innerHTML =
                            '<p class="text-center text-danger font-weight-bold" style="font-size: 24px; font-weight: 900; margin-top: -20px;">Sorry, no results found sir</p>';
                    }
                })
                .catch((error) =>
                    console.error(
                        "Error fetching global search results:",
                        error
                    )
                );
        } else {
            alert("Please enter a search term.");
        }
    });
});
