var data = {
    "options": [
        "Option 1",
        "Option 2",
        "Option 3",
        "Option 4",
        "Option 5"
    ]
}

$('.typeahead').typeahead({
    source: function (query, process) {
        return data.options;
    }
});