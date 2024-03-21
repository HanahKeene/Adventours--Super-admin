// Create
const insertData = (url, rollNo, data) => {
    try {
        db.ref("adventours/" + url + rollNo).set(data);
        Swal.fire({
          title: "Success!",
          text: "Data inserted successfully!",
          icon: "success",
        });
    } catch (error) {
        Swal.fire({
          title: "Error!",
          text: error,
          icon: "error",
        });
    }
}

// Read
const readData = (url, rollNo, callback) => {
  try {
    db.ref("adventours/" + url + (rollNo ?? "")).on("value", (snap) => {
      const data = snap.val();
      callback(null, data);
    });
  } catch (error) {
    callback(error, null);
  }
};


// Update
const updateData = (url, rollNo, data) => {
    try {
        let finalData = data;
        if (finalData.hasOwnProperty("rollNo")) {
          delete finalData.rollNo;
        }
        db.ref("adventours/" + url + rollNo).update(finalData);
        Swal.fire({
          title: "Success!",
          text: "Data updated successfully!",
          icon: "success",
        });
    } catch (error) {
        Swal.fire({
          title: "Error!",
          text: error,
          icon: "error",
        });
    }
};


// Delete
const deleteData = (url, rollNo) => {
  Swal.fire({
    title: "Are you sure?",
    text: "This action cannot be undone",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      try {
        db.ref("adventours/" + url + rollNo).remove();
        Swal.fire({
          title: "Success!",
          text: "Data removed successfully!",
          icon: "success",
        });
      } catch (error) {
        Swal.fire({
          title: "Error!",
          text: error,
          icon: "error",
        });
      }
    }
  });
};



