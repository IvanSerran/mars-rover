# Mars Rover Mission

**Mars Rover Mission** is a web application that simulates the movement of a Mars rover navigating a 2D grid. The rover receives a sequence of movement commands and reports its final position and direction. If it encounters an obstacle, it stops and reports the location where it was blocked.

---

# Project Overview
- The rover operates on a 2D grid (default size: 200x200).
- Users define:
    - Initial position (`x`, `y`)
    - Initial facing direction (`N`, `E`, `S`, `W`)
    - Number of obstacles
    - Movement commands (`F`, `L`, `R`)
- The rover follows the command sequence unless it encounters an obstacle, in which case it stops and reports the blocked location.

> Currently, the result is presented as text. A visual grid is **not yet implemented**, but is a planned feature for future versions.
---

## Tech Stack
- **Language:** PHP
- **Frontend:** HTML, CSS
- **Server:** Works locally using XAMPP or any PHP server environment

---

## ⚙️ How It Works

1. **User Form:**
   - The user submits initial position, direction, number of obstacles, and movement commands through a styled form.

2. **Rover Simulation:**
   - A PHP class simulates the rover's movement and obstacle detection logic.

3. **Results:**
   - The result page shows whether the rover successfully completed the mission or stopped due to an obstacle, including final coordinates and direction.

## 🧩 Future Improvements

- ❌ Visual representation of the grid and rover 
- ⏳ Option to simulate movement step-by-step
- 🌐 Multi-language support
