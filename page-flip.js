const notebookPage = document.querySelector('.notebook-page');
const notebookContent = document.querySelector('.notebook-content');

notebookPage.addEventListener('click', () => {
    notebookContent.classList.toggle('flipped');
});
