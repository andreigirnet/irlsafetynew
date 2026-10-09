// let reviewContainer = document.getElementById('customersReviews');
// let reviewContainerMob = document.getElementById('customerReviewsMob');
//
// function handleResize() {
//     if (window.innerWidth < 760) {
//         reviewContainer.style.display = 'none';
//         reviewContainerMob.style.display = 'block';
//     } else {
//         reviewContainer.style.display = 'block';
//         reviewContainerMob.style.display = 'none';
//     }
// }
//
// window.addEventListener('resize', handleResize);
 function switchDevice(type) {
      const screen = document.getElementById('deviceScreen');
      const tabs = document.querySelectorAll('.mhi-tab');
      
      // Update active tab styling
      tabs.forEach(tab => tab.classList.remove('active'));
      event.target.classList.add('active');

      // Update screen class frame size
      screen.className = `mhi-device-screen ${type}`;
    }