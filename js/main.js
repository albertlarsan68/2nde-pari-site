window.onload = function () {
    window.onkeyup = async function (event) {
        let down_arrow = "ArrowDown";
        let up_arrow = "ArrowUp";
        let left_arrow = "ArrowLeft";
        let right_arrow = "ArrowRight";
        let space_key = " ";
        let enter_key = "Enter";
        let go_next = [down_arrow, right_arrow, space_key, enter_key];
        let go_previous = [up_arrow, left_arrow];
        let go_1 = ["1", "&"];
        let go_2 = ["2", "é"];
        let go_3 = ["3", "\""];
        let go_4 = ["4", "'"];
        let go_5 = ["5", "("];

        if (go_next.includes(event.key)) {
            let next_selected = document.getElementsByClassName('nav-link active')[0].nextElementSibling;
            if (next_selected) {
                document.getElementById(next_selected.getAttribute('href').slice(1)).scrollIntoView({ behavior: 'smooth' });
            }
            event.preventDefault();
            event.stopPropagation();
        }
        else {
            if (go_previous.includes(event.key)) {
                let next_selected = document.getElementsByClassName('nav-link active')[0].previousElementSibling;
                if (next_selected) {
                    document.getElementById(next_selected.getAttribute('href').slice(1)).scrollIntoView({ behavior: 'smooth' });
                }
                event.preventDefault();
                event.stopPropagation();
            }
            else {
                if (go_1.includes(event.key)) {
                    let next_selected = document.getElementById('navbar').children[0].children[0];
                    if (next_selected) {
                        document.getElementById(next_selected.getAttribute('href').slice(1)).scrollIntoView({ behavior: 'smooth' });
                    }
                } else {
                    if (go_2.includes(event.key)) {
                        let next_selected = document.getElementById('navbar').children[0].children[1];
                        if (next_selected) {
                            document.getElementById(next_selected.getAttribute('href').slice(1)).scrollIntoView({ behavior: 'smooth' });
                        }
                    } else {
                        if (go_3.includes(event.key)) {
                            let next_selected = document.getElementById('navbar').children[0].children[2];
                            if (next_selected) {
                                document.getElementById(next_selected.getAttribute('href').slice(1)).scrollIntoView({ behavior: 'smooth' });
                            }
                        } else {
                            if (go_4.includes(event.key)) {
                                let next_selected = document.getElementById('navbar').children[0].children[3];
                                if (next_selected) {
                                    document.getElementById(next_selected.getAttribute('href').slice(1)).scrollIntoView({ behavior: 'smooth' });
                                }
                            } else {
                                if (go_5.includes(event.key)) {
                                    let next_selected = document.getElementById('navbar').children[0].children[4];
                                    if (next_selected) {
                                        document.getElementById(next_selected.getAttribute('href').slice(1)).scrollIntoView({ behavior: 'smooth' });
                                    }
                                }
                            };
                        };
                    };
                };
            };
        };
    };
    let navbar_links = document.getElementById("navbar").firstElementChild.children
    for (let i = 0; i < navbar_links.length; i++) {
        const element = navbar_links[i];
        element.onclick = function (event) {
            event.preventDefault()
            document.getElementById(element.getAttribute('href').slice(1)).scrollIntoView({ behavior: 'smooth' });
        }
    }
};