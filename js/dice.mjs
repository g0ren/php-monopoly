function waitForEl(selector, callback) {
    if (jQuery(selector).length) {
        callback();
    } else {
        setTimeout(function() {
            waitForEl(selector, callback);
        }, 100);
    }
}

function ThrowDie(id){
    let tl_position = $("#topleft").offset();
    let offset_top = tl_position.top;
    let offset_left = tl_position.left;

    let br_position = $("#bottomright").offset();
    let size_top = br_position.top;
    let size_left = br_position.left;

    console.log(`id ${id}: size_left ${size_left}, offset left ${offset_left}, size top ${size_top}, offset_top ${offset_top}`);

    $(`${id}`)
        .css("left", () =>
        {
            let left = offset_left + Math.random() * (size_left - offset_left);
            console.log(`left ${left}`);
            return `${left}px`;
        })
        .css("top", () =>
        {
            let top = offset_top + Math.random() * (size_top - offset_top);
            console.log(`top ${top}`);
            return `${top}px`;
        })
}

function Reposition(){
    let tl_position = $("#topleft").offset();
    let offset_top = tl_position.top;
    let offset_left = tl_position.left;

    let br_position = $("#bottomright").offset();
    let size_top = br_position.top;
    let size_left = br_position.left;

    let left = offset_left + Math.random() * (size_left - offset_left);
    let top = offset_top + Math.random() * (size_top - offset_top);
    return {left: left, top: top};
}

function ThrowAll() {
    let pos0 = Reposition();
    let pos1 = Reposition();

    $.ajax(
        {method: "POST",
            url: "/snippets/throw_dice.php",
            data:
                {
                    left0: pos0["left"],
                    top0: pos0["top"],
                    left1: pos1["left"],
                    top1: pos1["top"]
                }
        })
        .done(
            (response) =>{
                console.log(response);
                $("#dice")
                    .html(response);
            }
        )

}

export { ThrowAll, ThrowDie };