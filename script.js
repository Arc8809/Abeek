const mql = window.matchMedia("(max-width: 800px)");
const mql2 = window.matchMedia("(min-width: 801px)");

let nav;
let navPointer = document.getElementById("nav");
let navChildren;

mql.onchange = (e) => {
  if (e.matches) {
    /* the viewport is 800 pixels wide or less */
    if (document.getElementById("nav")) {
    /* Removes the navigational menu */
      nav = document.getElementById("nav");
      navChildren = Array.from(nav.children);
      nav.remove();
    }
  } 
};

mql2.onchange = (e) => {
  if (e.matches) {
    /* the viewport is 801 pixels wide or more */
    if (document.getElementById("nav") === null) {
      const containers = document.getElementsByClassName("container");
      const container = containers[0];

       /* Inserts back the navigational menu */
      node = document.createElement("nav");
      node.id = "nav";

      /* Inserts back the child elements of the navigational menu */
      navChildren.forEach(child => {
        node.appendChild(child);
      });

      container.insertBefore(node, container.lastElementChild);
    }
  }
};


