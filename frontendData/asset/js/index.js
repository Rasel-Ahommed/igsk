// navbar pop up script
$(document).ready(function () {
    // Toggle visibility of content when the button is clicked
    $("#toggleSideBar").click(function () {
        $("#sidebarContent").toggle("fast");
    });
});

// Script for gallery Lightbox Modal

function openLightbox(button) {
    let image = $(button).siblings(".gallery-item");

    let imageUrl = image.attr("src");

    let imageAlt = image.attr("alt");

    $("#galleryLightboxImage").attr("src", imageUrl);

    $("#galleryLightboxImage").attr("alt", imageAlt);

    $("#galleryLightboxModal .modal-title").text(imageAlt);

    $("#galleryLightboxModal").modal("show");
}

// Event listener for button click
$(".member-box").on("click", function () {
    // Your code to run when the button is clicked
    $("#teacherLightboxModal").modal("show");
});

// celander script
$(document).ready(function () {
    // Get current date
    var currentDate = new Date();

    var currentMonth = currentDate.getMonth();

    var currentYear = currentDate.getFullYear();

    var currentDay = currentDate.getDate();

    // Display current month and year
    $("#current-month-year").text(
        getMonthName(currentMonth) + " " + currentYear
    );

    // Populate calendar
    populateCalendar(currentMonth, currentYear);

    // Event listener for previous month button
    $(".prev-month").click(function () {
        if (currentMonth === 0) {
            currentYear -= 1;

            currentMonth = 11;
        } else {
            currentMonth -= 1;
        }

        $("#current-month-year").text(
            getMonthName(currentMonth) + " " + currentYear
        );

        populateCalendar(currentMonth, currentYear);
    });

    // Event listener for next month button
    $(".next-month").click(function () {
        if (currentMonth === 11) {
            currentYear += 1;

            currentMonth = 0;
        } else {
            currentMonth += 1;
        }

        $("#current-month-year").text(
            getMonthName(currentMonth) + " " + currentYear
        );

        populateCalendar(currentMonth, currentYear);
    });

    // Function to populate calendar
    function populateCalendar(month, year) {
        var firstDay = new Date(year, month, 1);

        var startingDay = firstDay.getDay();

        var daysInMonth = new Date(year, month + 1, 0).getDate();

        var tbody = $("#calendar-body");

        tbody.empty();

        var date = 1;

        for (var i = 0; i < 6; i++) {
            var row = $("<tr></tr>");

            for (var j = 0; j < 7; j++) {
                if (i === 0 && j < startingDay) {
                    var cell = $("<td></td>");

                    row.append(cell);
                } else if (date > daysInMonth) {
                    break;
                } else {
                    var cell = $("<td>" + date + "</td>");

                    if (
                        date === currentDay &&
                        month === currentDate.getMonth() &&
                        year === currentDate.getFullYear()
                    ) {
                        cell.addClass("active-day");
                    }

                    row.append(cell);

                    date++;
                }
            }

            tbody.append(row);
        }

        get_event_data(daysInMonth);
    }

    function get_event_data(daysInMonth) {
        $.ajax({
            url: "get_event_data", // Specify the URL to fetch events
            method: "GET",
            success: function (data) {
                console.log(data);
                console.log(daysInMonth);
                // Process event data
                var events = data.events; // Assuming events are returned in JSON format with 'events' key
                drawEventLines(events, daysInMonth);
            },
            error: function (xhr, status, error) {
                console.error("Failed to fetch events:", error);
            },
        });
    }

    // Function to draw event lines on calendar
    function drawEventLines(events, daysInMonth) {
        var color_def = $("#color_def");
        color_def.empty();
        events.forEach(function (event) {
            var startDate = new Date(event.start_date);
            var endDate = new Date(event.end_date);
            var eveColor = event.color_code;
            var startDay = startDate.getDate();
            var endDay = endDate.getDate();
            var startMonth = startDate.getMonth();
            var endMonth = endDate.getMonth();
            var startYear = startDate.getFullYear();
            var endYear = endDate.getFullYear();

            if (startMonth === currentMonth && startYear === currentYear) {
                var str = `<li class="d-flex pb-2 gap-2"><div class="eve-color-info" style="background-color: ${eveColor}"></div>${event.title}</li>`;

                color_def.append(str);

                if (endMonth === currentMonth && endYear === currentYear) {
                    // Calculate the cell index for the start and end dates
                    var startCellIndex =
                        startDay +
                        getStartingDayOfMonth(startMonth, startYear) -
                        1;
                    var endCellIndex =
                        endDay + getStartingDayOfMonth(endMonth, endYear) - 1;
                    // Draw event lines on the calendar
                    drawLine(
                        startCellIndex,
                        endCellIndex,
                        eveColor,
                        daysInMonth
                    );
                    return;
                } else {
                    var startCellIndex =
                        startDay +
                        getStartingDayOfMonth(startMonth, startYear) -
                        1;
                    var endCellIndex =
                        daysInMonth +
                        getStartingDayOfMonth(endMonth, endYear) -
                        1;
                    // Draw event lines on the calendar
                    drawLine(
                        startCellIndex,
                        endCellIndex,
                        eveColor,
                        daysInMonth
                    );
                    return;
                }
                return;
            } else if((endMonth === currentMonth && endYear === currentYear)) {
                var startCellIndex =
                    0 + getStartingDayOfMonth(startMonth, startYear) - 1;
                var endCellIndex =
                    endDay + getStartingDayOfMonth(endMonth, endYear) - 1;
                // Draw event lines on the calendar
                drawLine(startCellIndex, endCellIndex, eveColor, daysInMonth);
                return;
            }
            console.log(currentMonth);
        });
    }

    // Function to draw a line on the calendar between start and end dates
    function drawLine(startIndex, endIndex, eveColor, lastDay) {
        // Loop through the table cells between startIndex and endIndex and apply background color
        console.log("Draw Line: " + startIndex, endIndex, eveColor, lastDay);
        $(".calendar-table tbody tr td").each(function (index) {
            if (index >= startIndex && index <= endIndex) {
                $(this).css("background-color", eveColor);
            }
        });
    }

    // Utility function to get starting day of the month
    function getStartingDayOfMonth(month, year) {
        return new Date(year, month, 1).getDay();
    }

    // Utility function to get month name from index
    function getMonthName(monthIndex) {
        var months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];
        return months[monthIndex];
    }

    // Function to get month name from index
    function getMonthName(monthIndex) {
        var months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];

        return months[monthIndex];
    }
});

// teacher staff btn script
$("#elementory_year").hide("slow");

$("#mid_year").hide("slow");

$("#high_year").hide("slow");

$(document).ready(function () {
    $(".early-btn").click(function (e) {
        e.preventDefault();

        $("#elementory_year").hide("slow");

        $(".elementory-btn").removeClass("member-active-list");

        $("#mid_year").hide("slow");

        $(".mid-btn").removeClass("member-active-list");

        $("#high_year").hide("slow");

        $(".high-btn").removeClass("member-active-list");

        $("#early_year").show("slow");

        $(".early-btn").addClass("member-active-list");
    });

    $(".elementory-btn").click(function (e) {
        e.preventDefault();

        $("#mid_year").hide("slow");

        $(".mid-btn").removeClass("member-active-list");

        $("#high_year").hide("slow");

        $(".high-btn").removeClass("member-active-list");

        $("#early_year").hide("slow");

        $(".early-btn").removeClass("member-active-list");

        $("#elementory_year").show("slow");

        $(".elementory-btn").addClass("member-active-list");
    });

    $(".mid-btn").click(function (e) {
        e.preventDefault();

        $("#elementory_year").hide("slow");

        $(".elementory-btn").removeClass("member-active-list");

        $("#high_year").hide("slow");

        $(".high-btn").removeClass("member-active-list");

        $("#early_year").hide("slow");

        $(".early-btn").removeClass("member-active-list");

        $("#mid_year").show("slow");

        $(".mid-btn").addClass("member-active-list");
    });

    $(".high-btn").click(function (e) {
        e.preventDefault();

        $("#elementory_year").hide("slow");

        $(".elementory-btn").removeClass("member-active-list");

        $("#mid_year").hide("slow");

        $(".mid-btn").removeClass("member-active-list");

        $("#early_year").hide("slow");

        $(".early-btn").removeClass("member-active-list");

        $("#high_year").show("slow");

        $(".high-btn").addClass("member-active-list");
    });
});

$(document).ready(function () {
    // card slider for newsletter
    let carousel = $(".newsletter .carousel");
    let btns = $(".newsletter .wrapper i");
    let carouselChildren = carousel.children();
    let wrapper = $(".newsletter .wrapper");

    //getting card width
    let cardWidth = $(".newsletter .card").outerWidth();
    let isDragging = false,
        startX,
        startScrollLeft,
        isAutoPlay = true,
        timeoutId;

    //getting number of cards can fit in carousel at once
    let cardsPerView = Math.round(carousel.width() / cardWidth);

    //inserting copied few last cards to beggining of carousel for infinite scrolling
    carouselChildren
        .slice(-cardsPerView)
        .get()
        .reverse()
        .forEach(function (card) {
            carousel.prepend($(card).prop("outerHTML"));
        });

    //inserting copied few first cards to end of the carousel for infinite scrolling
    carouselChildren.slice(0, cardsPerView).each(function (i, card) {
        carousel.append($(card).prop("outerHTML"));
    });

    btns.on("click", function () {
        //if the clicked button id is left scrolling carousel towards left by card width else towards right by card width
        carousel.scrollLeft(
            carousel.scrollLeft() +
                ($(this).attr("id") === "left" ? -cardWidth : cardWidth)
        );
    });

    let dragStart = function (e) {
        isDragging = true;
        carousel.addClass("dragging");

        //recording initial cursor and scroll position
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft();
    };

    let dragging = function (e) {
        //returning here if the isDragging value is false
        if (!isDragging) return;
        //scrolling carousel according to mouse cursor
        carousel.scrollLeft(startScrollLeft - (e.pageX - startX));
    };

    let dragStop = function () {
        isDragging = false;
        carousel.removeClass("dragging");
    };

    let infiniteScroll = function () {
        //if the carousel is at begining, scroll to end
        //else carousel at end , scroll to beginning
        if (carousel.scrollLeft() === 0) {
            carousel.addClass("no-transition");
            carousel.scrollLeft(
                carousel.get(0).scrollWidth - 2 * carousel.outerWidth()
            );
            carousel.removeClass("no-transition");
        } else if (
            Math.ceil(carousel.scrollLeft()) ===
            carousel.get(0).scrollWidth - carousel.outerWidth()
        ) {
            carousel.addClass("no-transition");
            carousel.scrollLeft(carousel.outerWidth());
            carousel.removeClass("no-transition");
        }

        //clearing timeout & starting auto play if the mouse is not hovering the carousel
        clearTimeout(timeoutId);
        if (!wrapper.is(":hover")) autoPlay();
    };

    let autoPlay = function () {
        //if the device is not mobile or tab, enabling auto play
        if (window.innerWidth < 800 || !isAutoPlay) return; //returning if the device is not desktop & isAutoPlay is false

        //autoplaying the carousel after every 2500 ms
        timeoutId = setTimeout(function () {
            carousel.scrollLeft(carousel.scrollLeft() + cardWidth);
        }, 2500);
    };

    autoPlay();

    carousel.on("mousedown", dragStart);
    carousel.on("mousemove", dragging);
    $(document).on("mouseup", dragStop);
    carousel.on("scroll", infiniteScroll);

    //auto play will be active only when there is no hover on carousel
    wrapper.on("mouseenter", function () {
        clearTimeout(timeoutId);
    });
    wrapper.on("mouseleave", autoPlay);
});
