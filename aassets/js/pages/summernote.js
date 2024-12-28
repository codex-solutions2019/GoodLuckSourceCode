
$('#summernote').summernote({
    // fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather','QuickSand','Titillium Web'],
    // tabsize: 2,
    // height: 250,
    // disableDragAndDrop: true,
    // fontSizes: ['8', '9', '10', '11', '12', '13', '14', '15', '16', '18', '20', '22' , '24', '28', '32', '36', '40', '48'],
    //   toolbar: [
    // ['style'],
    // ['style', ['clear', 'bold', 'italic', 'underline']],
    // ['fontname', ['fontname']],
    // ['fontsize', ['fontsize']],
    // ['color', ['color']],       
    // ['para', ['ul', 'ol', 'paragraph']],
    // ['table', ['table']],
    // ['view', ['fullscreen', 'codeview', 'help']],
    

    //       ]


})

$('#summernote_new').summernote({
    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather','QuickSand','Titillium Web'],
    fontSizes: ['8', '9', '10', '11', '12', '13', '14', '15', '16', '18', '20', '22' , '24', '28', '32', '36', '40', '48','49'],
    tabsize: 2,
    height: 250,

})
$("#hint").summernote({
    height: 100,
    toolbar: false,
    placeholder: 'type with apple, orange, watermelon and lemon',
    hint: {
        words: ['apple', 'orange', 'watermelon', 'lemon'],
        match: /\b(\w{1,})$/,
        search: function (keyword, callback) {
            callback($.grep(this.words, function (item) {
                return item.indexOf(keyword) === 0;
            }));
        }
    }
});


