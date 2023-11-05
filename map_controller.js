class MapController {

    // The constructor function is called when a new instance of the MapController class is created.
    // It takes two parameters: model (an instance of MapModel) and view (an instance of MapView).
    // These parameters represent the data model and the view of the application, respectively.
    constructor(model, view) {
        this.model = model;  // Store the reference to the MapModel instance.
        this.view = view;    // Store the reference to the MapView instance.
    }

    // The initMap method initializes the map by retrieving the initial latitude and longitude values from the model.
    initMap() {
        const center = { lat: this.model.latitude, lng: this.model.longitude };
        this.view.initMap(center);  // Call the initMap method of the view, passing the center coordinates.
    }

    // The handleMapClick method is called when the map is clicked. It retrieves the latitude and longitude
    // of the clicked position and updates the view with these values.
    handleMapClick(event) {
        const lat = event.latLng.lat();  // Get the latitude of the clicked position.
        const long = event.latLng.lng(); // Get the longitude of the clicked position.
        this.view.updateClickedPosition(lat, long);  // Call the view's updateClickedPosition method.
    }

    // The handleMapMouseMove method is called when the mouse is moved over the map.
    // It retrieves the latitude and longitude of the mouse position and updates the view with these values.
    handleMapMouseMove(event) {
        const lat = event.latLng.lat();  // Get the latitude of the mouse position.
        const long = event.latLng.lng(); // Get the longitude of the mouse position.
        this.view.updateMovedPosition(lat, long);  // Call the view's updateMovedPosition method.
    }
}
