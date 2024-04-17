<template>
  <v-card>
    <v-img :src="course.image" height="200"></v-img>
    <v-card-title class="text-h6">{{ course.title }}</v-card-title>
    <v-row>
      <v-col cols="6">
        <v-card-subtitle>{{ course.author }}</v-card-subtitle>
      </v-col>
      <v-col cols="6" class="d-flex ">
        <v-icon color="primary">mdi-clock-time-four-outline</v-icon>
        <p class=" m-0">1h 50m</p>
      </v-col>
    </v-row>
    <v-rating v-model="course.rating" readonly></v-rating>
    <v-card-text>{{ course.description }}</v-card-text>
    <v-btn color="primary" block>Enroll Now</v-btn>
  </v-card>
</template>


<script>
export default {
  data: () => ({
    course:
    {
      id: 1,
      title: 'Course Title',
      image: 'images/courses/item1.jpg',
      author: 'Author Name',
      rating: 4,
      description: 'Course Description',
    },
    // Add more course objects here

  }),


}
</script>