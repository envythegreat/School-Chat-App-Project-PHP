const StudentList =  document.querySelectorAll('.user-item');
const studentPerPage = 5;
const page = document.getElementsByClassName('page')[0];
function showPage(list, page) {
  let firstItem = (page * studentPerPage) - studentPerPage;
  let lastItem = page * studentPerPage;
  for(let i = 0; i < list.length; i++ ) {
  if ( i >= firstItem && i < lastItem ) {
    list[i].style.display = '';
  } else {
    list[i].style.display = 'none';
    }
  }
}
function appendPageLinks(list) {
   const NewDiv = document.createElement('DIV');
   const NewUL = document.createElement('UL');
   const totalPages = Math.ceil(list.length/studentPerPage);
   NewDiv.className = 'pagination';
   NewDiv.appendChild(NewUL);
   page.appendChild(NewDiv);
   for (let i = 1; i <= totalPages; i++) {
      let NewLI = document.createElement('LI');  
      let NewLink = document.createElement('A');
      NewLink.href = '#';
      NewLink.textContent = i;
      NewUL.appendChild(NewLI);
      NewLI.appendChild(NewLink);
   }
   const Links = document.querySelectorAll('.pagination li a');
   Links[0].className = "active";
   for (let i = 0; i < Links.length; i++ ) {
      Links[i].addEventListener('click', (e)=> {
         const clickLink = e.target.textContent;
         for (let j = 0; j < Links.length; j++) {
            Links[j].className = '';
         }
         console.log(clickLink);
         e.target.className = 'active';
         showPage(list, clickLink);
      });
   }
}
appendPageLinks(StudentList);
showPage(StudentList, 1);