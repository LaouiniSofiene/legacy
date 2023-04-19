<template>
    <div ref="map" class="google-map"></div>
  </template>
  
  <script>
  import { Loader } from '@googlemaps/js-api-loader';
  
  export default {
    name: 'GoogleMap',
    props: {
      apiKey: String,
      mapOptions: Object,
      mapStyles: Object,
      markers: Array
    },
    data() {
      return {
        map: null,
        infoWindow: null,
      };
    },
    async mounted() {
      await this.initMap();
    },
    methods: {
      async initMap() {
        const loader = new Loader({
          apiKey: this.apiKey,
          version: 'weekly',
        });
  
        try {
          await loader.load();
          this.map = new google.maps.Map(this.$refs.map, {
            ...this.mapOptions,
            styles: this.mapStyles,
          });
          this.infoWindow = new google.maps.InfoWindow();
          this.createMarkers();
        } catch (error) {
          console.error('Error loading Google Maps API:', error);
        }
      },
      createMarkers() {
        if (this.markers && this.markers.length > 0) {
          this.markers.forEach((marker) => {
            const gMarker = new google.maps.Marker({
              position: marker.position,
              map: this.map,
              title: marker.title,
            });

            gMarker.addListener('click', () => {
              this.infoWindow.close(); // Close any previously opened info window
              this.infoWindow.setContent(marker.title);
              this.infoWindow.open(this.map, gMarker);
            });
          });
        }
      },
    },
  };
  </script>
  
  <style>
  .google-map {
    width: 100%;
    height: 800px;
  }
  </style>
  