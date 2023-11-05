class MapView {
    // Constructor method
    constructor() {
        this.mapElement = document.getElementById('map');
        this.latClickedElement = document.getElementById('latclicked');
        this.longClickedElement = document.getElementById('longclicked');
        this.latMovedElement = document.getElementById('latmoved');
        this.longMovedElement = document.getElementById('longmoved');
    }

    // Method to initialize the Google Map
    initMap(center) {
        // Create a new Google Map instance and set its center and zoom level
        this.map = new google.maps.Map(this.mapElement, {
            center: center,
            zoom: 14,
            disableDoubleClickZoom: true,
        });

        // Set up event listeners for double-click and mouse move events on the map
        this.map.addListener('dblclick', (event) => {
            // When the user double-clicks on the map, update the clicked position
            const lat = event.latLng.lat(); // Get latitude from the event object
            const lng = event.latLng.lng(); // Get longitude from the event object
            this.updateClickedPosition(lat, lng); // Call updateClickedPosition method
        });

        this.map.addListener('mousemove', (event) => {
            // When the user moves the mouse over the map, update the moved position
            const lat = event.latLng.lat(); // Get latitude from the event object
            const lng = event.latLng.lng(); // Get longitude from the event object
            this.updateMovedPosition(lat, lng); // Call updateMovedPosition method
        });
    }

    // Method to update the clicked position on the UI
    updateClickedPosition(lat, lng) {
        this.latClickedElement.value = lat; // Update latitude input field value
        this.longClickedElement.value = lng; // Update longitude input field value
    }

    // Method to update the moved position on the UI
    updateMovedPosition(lat, lng) {
        this.latMovedElement.innerText = lat; // Update latitude display element text
        this.longMovedElement.innerText = lng; // Update longitude display element text
    }
}
